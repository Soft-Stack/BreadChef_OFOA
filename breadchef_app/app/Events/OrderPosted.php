<?php

namespace App\Events;

use App\Order;
use App\Cart;
use App\Customer;
use App\Transformers\OrderTransformer;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderPosted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The order instance.
     *
     * @var \App\Order
     */
    public $order;

    /**
     * The order instance.
     *
     * @var \App\Customer
     */
    public $customer;

    /**
     * The order instance.
     *
     * @var \App\Cart
     */
    public $cart;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($order, $cart, $customer)
    {
        $this->order = OrderTransformer::formatOrder($order);
    }

    // public function broadcastWith () {
    //     return [
    //         'order'    => $this->order,
    //         'cart'     => $this->cart,
    //         'customer' => $this->customer,
    //     ];
    // }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['my-channel'];
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
}
