<?php

namespace App\Http\Controllers;

use App\Factories\NotificationFactory;
use App\Models\Notification;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Mockery\Matcher\Not;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::all();
        return Inertia::render('notification/Index', [
            'notifications' => $notifications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return Inertia::render('notification/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, NotificationFactory $factory)
    {
        $NotificationSender = $request->input('type');
        $sender = $factory->make($NotificationSender);
        $recipient = $request->input('recipient');
        $message = $request->input('message');
        $sender->send($recipient, $message);
        return Inertia::render('notification/Index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
