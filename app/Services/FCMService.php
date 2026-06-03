<?php
namespace App\Services;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class FCMService{
    
    protected $messaging;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(config('services.firebase.credentials_file'));
        $this->messaging = $factory->createMessaging();
    }

    public function sendNotification($tokens, $title, $body, $data = [])
    {
         $message = CloudMessage::new()
            ->withNotification(Notification::create($title, $body))
            ->withData(array_merge($data, [
                'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
            ]));

        $this->messaging->sendMulticast($message, $tokens);
    }
}
    
            // $fcmService = new FCMService();
            // $fcmService->sendNotification(
            //     $jobpost->user->firebaseTokens->token,  
            //     'Job Post',
            //     'You have a new job post',
            //     ['job_post_id' => $jobpost->id]
            // );
