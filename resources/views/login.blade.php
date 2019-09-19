@extends('layouts.app.appLayout')

@section('content')

                 <!-- accont area start -->
                <div class="account_area ptb-100">
                    <div class="container">
                        <div class="row">
                           <!--login area start-->
                            <div class="col-lg-6 col-md-12">
                                <div class="account_form">
                                    <div class="login_title">
                                        <h2>login</h2>
                                    </div>
                                    <div class="login_form login">
                                        <form action="#">
                                            <div class="login_input">
                                                <label>Username or email <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="login_input">
                                                <label>Passwords  <span>*</span></label>
                                                <input type="password">
                                            </div>
                                            <div class="login_submit">
                                                <button type="submit">login</button>
                                                <label for="remember">
                                                    <input id="remember" type="checkbox">
                                                    Remember me
                                                </label>
                                                <a href="#">Lost your password?</a>
                                            </div>

                                        </form>
                                    </div>
                                 </div>    
                            </div>
                            <!--login area start-->

                            <!--register area start-->
                            <div class="col-lg-6 col-md-12">
                                <div class="login_title">
                                    <h2>Register</h2>
                                </div>
                                <div class="login_form form_register ">
                                    <form action="#">
                                        <div class="login_input">
                                            <label>Email address <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="login_input">
                                            <label>password <span>*</span></label>
                                            <input type="password">
                                        </div>

                                        <div class="login_submit">
                                            <button type="submit">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--register area end-->
                        </div>
                    </div>
                </div>
                <!-- accont area end -->
                
@endsection

