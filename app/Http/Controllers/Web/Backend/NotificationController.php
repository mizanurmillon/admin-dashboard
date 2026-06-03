<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $notifications = auth()->user()->notifications()->latest()->paginate(20);
        return view('backend.notifications.index', compact('notifications'));
    }

    public function fetch(Request $request)
    {
        $notifications = auth()->user()->unreadNotifications()->latest()->take(5)->get();
        $unreadCount = auth()->user()->unreadNotifications()->count();
        
        return response()->json([
            'notifications' => $notifications->map(function($n) {
                // Get the related user if user_id exists in notification data
                $notificationUser = null;
                if (isset($n->data['user_id'])) {
                    $notificationUser = User::find($n->data['user_id']);
                }
                
                // Prefer user avatar, then notification data avatar
                $avatar = $notificationUser?->avatar 
                    ? asset($notificationUser->avatar) 
                    : asset($n->data['avatar'] ?? 'backend/assets/images/avtar/2.jpg');
                
                return [
                    'id' => $n->id,
                    'subject' => $n->data['subject'] ?? \Illuminate\Support\Str::limit($n->data['message'] ?? '', 60),
                    'message' => $n->data['message'] ?? '',
                    'avatar' => $avatar,
                    'time' => $n->created_at->diffForHumans(),
                    'created_at' => $n->created_at,
                ];
            }),
            'unreadCount' => $unreadCount,
        ]);
    }

    public function markRead($id)
    {
        $n = auth()->user()->notifications()->where('id', $id)->firstOrFail();
        $n->markAsRead();
        return back();
    }

    public function destroy($id)
    {
        $n = auth()->user()->notifications()->where('id', $id)->firstOrFail();
        $n->delete();
        return back();
    }
}
