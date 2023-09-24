<x-app-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="cart_section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="cart_container">
                                        <div class="cart_title">Shopping Cart<small> (1 item in your cart) </small>
                                        </div>

                                        <x-cart/>
                                        <x-cart/>
                                        <x-cart/>
                                        <x-cart/>


                                        <div class="order_total">
                                            <div class="order_total_content text-md-right">
                                                <div class="order_total_title">Order Total:</div>
                                                <div class="order_total_amount">₹22000</div>
                                            </div>
                                        </div>
                                        <div class="cart_buttons"> <button type="button"
                                                class="button cart_button_clear">Checkout</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</x-app-guest-layout>