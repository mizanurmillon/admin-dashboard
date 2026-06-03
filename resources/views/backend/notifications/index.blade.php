@extends('backend.app')
@section('title', 'Notifications Management')

@push('style')
<style>
    .notification-container {
        padding: 10px 0;
    }

    .notification-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        background: #fff;
        margin-bottom: 30px;
        overflow: hidden;
    }

    .notification-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .notification-item {
        display: flex;
        align-items: center;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        border: 1px solid #eef2f6;
        border-left: 5px solid #2b5f60;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .notification-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        border-color: #d1dbe5;
    }

    .notification-item.unread {
        background-color: #f7fafc;
        border-color: #e2e8f0;
    }

    .notification-item.unread::before {
        content: '';
        position: absolute;
        top: 20px;
        right: 20px;
        width: 10px;
        height: 10px;
        background-color: var(--theme-deafult, #2b5f60);
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(43, 95, 96, 0.25);
    }

    /* Types left border colors */
    .notification-item.type-success {
        border-left-color: #2b5f60;
    }

    .notification-item.type-warning {
        border-left-color: #ffaa2b;
    }

    .notification-item.type-danger {
        border-left-color: #ff5f5f;
    }

    .notification-item.type-info {
        border-left-color: #0dcaf0;
    }

    /* Avatar & Badge styling */
    .notification-avatar-container {
        position: relative;
        flex-shrink: 0;
        margin-right: 20px;
    }

    .notification-avatar {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        object-fit: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        font-weight: 700;
        font-size: 1.1rem;
    }

    .notification-avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .notification-avatar.bg-success-light {
        background-color: rgba(0, 202, 114, 0.12);
        color: #00ca72;
    }

    .notification-avatar.bg-warning-light {
        background-color: rgba(255, 170, 43, 0.12);
        color: #ffaa2b;
    }

    .notification-avatar.bg-danger-light {
        background-color: rgba(255, 95, 95, 0.12);
        color: #ff5f5f;
    }

    .notification-avatar.bg-info-light {
        background-color: rgba(43, 95, 96, 0.12);
        color: #2b5f60;
    }

    .notification-type-badge {
        position: absolute;
        bottom: -2px;
        right: -2px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .notification-type-badge.bg-success {
        background-color: #00ca72 !important;
    }

    .notification-type-badge.bg-warning {
        background-color: #ffaa2b !important;
    }

    .notification-type-badge.bg-danger {
        background-color: #ff5f5f !important;
    }

    .notification-type-badge.bg-info {
        background-color: #2b5f60 !important;
    }

    /* Content styling */
    .notification-content {
        flex-grow: 1;
    }

    .notification-title {
        font-size: 16px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .notification-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .notification-title a:hover {
        color: var(--theme-deafult, #2b5f60);
    }

    .notification-desc {
        font-size: 14px;
        color: #5a738e;
        line-height: 1.5;
        margin-bottom: 8px;
    }

    .notification-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 12px;
        color: #94a3b8;
    }

    .notification-meta span {
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    .notification-meta i,
    .notification-meta svg {
        width: 14px;
        height: 14px;
    }

    /* Action Buttons */
    .notification-actions {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-left: 20px;
        flex-shrink: 0;
    }

    .btn-action {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: none;
        background: transparent;
        transition: all 0.2s ease;
        cursor: pointer;
        position: relative;
    }

    .btn-action.btn-read {
        background-color: rgba(0, 202, 114, 0.08);
        color: #2b5f60;
    }

    .btn-action.btn-read:hover {
        background-color: #2b5f60;
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(0, 202, 114, 0.3);
    }

    .btn-action.btn-delete {
        background-color: rgba(255, 95, 95, 0.08);
        color: #ff5f5f;
    }

    .btn-action.btn-delete:hover {
        background-color: #ff5f5f;
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(255, 95, 95, 0.3);
    }

    .btn-action svg,
    .btn-action i {
        width: 18px;
        height: 18px;
        stroke-width: 2.2px;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 80px 20px;
    }

    .empty-icon-wrap {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: rgba(43, 95, 96, 0.08);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        color: #2b5f60;
    }

    .empty-icon-wrap svg,
    .empty-icon-wrap i {
        width: 48px;
        height: 48px;
    }

    .empty-state h4 {
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .empty-state p {
        color: #94a3b8;
        font-size: 15px;
        max-width: 400px;
        margin: 0 auto;
    }

    /* Pagination design styling matching themes */
    .pagination-wrapper {
        margin-top: 25px;
        display: flex;
        justify-content: center;
    }

    /* Dark Mode compatibility styles */
    .dark-only .notification-card {
        background: #1e2430;
    }

    .dark-only .notification-item {
        background: #1e2430;
        border-color: #2d3748;
    }

    .dark-only .notification-item.unread {
        background: #252e3c;
    }

    .dark-only .notification-item:hover {
        border-color: #4a5568;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .dark-only .notification-title {
        color: #f1f5f9;
    }

    .dark-only .notification-desc {
        color: #94a3b8;
    }

    .dark-only .btn-action.btn-read {
        background-color: rgba(0, 202, 114, 0.15);
    }

    .dark-only .btn-action.btn-delete {
        background-color: rgba(255, 95, 95, 0.15);
    }

    .dark-only .notification-avatar.bg-success-light {
        background-color: rgba(0, 202, 114, 0.2);
    }

    .dark-only .notification-avatar.bg-warning-light {
        background-color: rgba(255, 170, 43, 0.2);
    }

    .dark-only .notification-avatar.bg-danger-light {
        background-color: rgba(255, 95, 95, 0.2);
    }

    .dark-only .notification-avatar.bg-info-light {
        background-color: rgba(43, 95, 96, 0.2);
    }

</style>
@endpush

@section('page-content')

<x-breadcrumbs title="Notifications Management" subtitle="Inbox" />

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="card notification-card">
                <x-table-header title="Notifications Inbox" subtitle="A list of all system notifications for your account" />

                <div class="card-body px-4 py-4">
                    @if($notifications->count() > 0)
                    <div class="notification-list">
                        @foreach($notifications as $notification)
                        @php
                        $type = strtolower($notification->data['type'] ?? 'info');
                        $avatar = $notification->data['avatar'] ?? null;
                        $url = $notification->data['url'] ?? 'javascript:void(0)';
                        $isUnread = is_null($notification->read_at);

                        // Choose styling classes based on type
                        $typeClass = 'type-info';
                        $avatarBg = 'bg-info-light';
                        $badgeClass = 'bg-info';
                        $iconName = 'bell';

                        if (in_array($type, ['success', 'completed', 'approved', 'active'])) {
                        $typeClass = 'type-success';
                        $avatarBg = 'bg-success-light';
                        $badgeClass = 'bg-success';
                        $iconName = 'check-circle';
                        } elseif (in_array($type, ['warning', 'pending', 'hold'])) {
                        $typeClass = 'type-warning';
                        $avatarBg = 'bg-warning-light';
                        $badgeClass = 'bg-warning';
                        $iconName = 'alert-triangle';
                        } elseif (in_array($type, ['danger', 'error', 'failed', 'declined', 'inactive'])) {
                        $typeClass = 'type-danger';
                        $avatarBg = 'bg-danger-light';
                        $badgeClass = 'bg-danger';
                        $iconName = 'alert-circle';
                        }

                        // Title fallback
                        $subject = $notification->data['subject'] ?? $notification->data['message'] ?? 'Notification';
                        @endphp

                        <div class="notification-item {{ $typeClass }} {{ $isUnread ? 'unread' : '' }}">
                            <!-- Avatar / Icon -->
                            <div class="notification-avatar-container">
                                @if($avatar)
                                <div class="notification-avatar">
                                    <img src="{{ asset($avatar) }}" alt="Avatar">
                                </div>
                                @else
                                <div class="notification-avatar {{ $avatarBg }}">
                                    <i data-feather="{{ $iconName }}"></i>
                                </div>
                                @endif
                                <div class="notification-type-badge {{ $badgeClass }}">
                                    <i data-feather="{{ $iconName }}" style="width: 10px; height: 10px; stroke-width: 3px;"></i>
                                </div>
                            </div>

                            <!-- Text Content -->
                            <div class="notification-content">
                                <h5 class="notification-title">
                                    @if($url && $url !== '#')
                                    <a href="{{ $url }}">{{ $subject }}</a>
                                    @else
                                    {{ $subject }}
                                    @endif
                                </h5>
                                @if(isset($notification->data['message']) && $notification->data['message'] !== $subject)
                                <div class="notification-desc">{{ $notification->data['message'] }}</div>
                                @endif

                                <div class="notification-meta">
                                    <span>
                                        <i data-feather="clock"></i>
                                        {{ $notification->created_at->diffForHumans() }}
                                    </span>
                                    @if($notification->data['type'] ?? null)
                                    <span class="badge {{ $badgeClass }} bg-opacity-10 text-capitalize py-1 px-2" style="font-size: 10px;">
                                        {{ $notification->data['type'] }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="notification-actions">
                                @if($isUnread)
                                <form method="POST" action="{{ route('notifications.markRead', $notification->id) }}" class="m-0">
                                    @csrf
                                    <button type="submit" class="btn-action btn-read" title="Mark as read" data-bs-toggle="tooltip">
                                        <i data-feather="check"></i>
                                    </button>
                                </form>
                                @endif
                                <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}" class="m-0" onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action btn-delete" title="Delete notification" data-bs-toggle="tooltip">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="pagination-wrapper">
                        {{ $notifications->links() }}
                    </div>
                    @else
                    <div class="empty-state">
                        <div class="empty-icon-wrap">
                            <i data-feather="bell-off"></i>
                        </div>
                        <h4>Your Inbox is Clean!</h4>
                        <p>No new notifications right now. We'll let you know when there's an update.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
