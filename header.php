<section class="fix-nav">
    <div class="container-fluid logo-bar-bg">
        <div class="logo-top-row">
            <div class="col-lg-3 text-center"><a href="index.html"><img src="assests/img/logo.png"
                                                                        alt=""/></a></div>
            <div class="col-lg-9">
                <div class="clearfix"></div>
                <div class="col-lg-9">
                    <div class="row text-center">
                        <div class="drop-select">
                            <div class="search-bar">
                                <div class="search-bar-item">
                                    <input type="text" placeholder="What are you looking for...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wishlist">
                    <div class="row">
                        <div class="cart-item">
                            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <p>Cart item</p>
                                <span>1</span></a>
                            <div class="cart-item-hover">
                                <div class="cart-item-list"> <img src="assests/img/cart-hover/item-1.png" alt="" />
                                    <h3>item 1</h3>
                                    <b><a href="#">X</a></b>
                                    <p>$49.00 <del>69.00</del></p>
                                </div>
                                <div class="cart-item-list"> <img src="assests/img/cart-hover/item-2.png" alt="" />
                                    <h3>item 2</h3>
                                    <b><a href="#">X</a></b>
                                    <p>$50.00 <del>69.00</del></p>
                                </div>
                                <div class="border"></div>
                                <div class="cart-total">
                                    <h6>Total Price</h6>
                                    <p>$99.00</p>
                                    <div class="clearfix"></div>
                                    <a href="#" class="cart-view">View all</a> <a href="#" class="cart-checkout">Check out</a> </div>
                            </div>
                        </div>
                        <div class="sign-in">
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                <p>Sign in</p>
                                <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            <div class="sign-in-hover">
                                <a>Your Account</a>
                                <a>Logout</a>
                                <a href="#" data-toggle="modal" data-target="#myModal" class="login">Login</a></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <nav class="navbar menu-bar-bg">
        <div class="container-fluid">
            <div class="navbar-header">
                <h3>Menu</h3>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
            </div>
            <div class="row">
                <div class="collapse mega-menu submenu navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li>
                            <a href="javascript:void(0)">Products<i class="fa fa-angle-down"
                                                                   aria-hidden="true"></i></a>
                            <div class="submenu-1">
                                <ul>
                                    <li><a href="#">products&nbsp;<i class="fa fa-angle-right"
                                                                     aria-hidden="true"></i></a>
                                        <div class="sub-mega-menu">
                                            <div class="sub-main-menu">
                                            <span>
                                                <a href="#">level1</a>
                                                <a href="#">level2</a>
                                                <a href="#">level3</a>
                                            </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Project2</a>
                                    </li>
                                    <li><a href="#">Project3</a>
                                    </li>
                                    <li><a href="#">Project4</a>
                                    </li>
                                    <li>
                                        <a href="#">Project5</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="javascript:void(0)">Mayfactrion</a></li>
                        <li><a href="javascript:void(0)">Contuct us</a></li>
                        <li><a href="javascript:void(0)">Catalog</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>
<!-- Modal -->
<div class="modal fade login-modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="col-sm-5">
                    <div class="modal-img"><img src="assests/img/modal-img.jpg" class="img-responsive" alt=""/></div>
                </div>
                <div class="col-sm-7 modal-text">
                    <div class="form-sec text-center">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Login</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                       data-toggle="tab">Sign up</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="input-row"><img src="assests/img/icon/phone.png" alt=""/>
                                    <input type="text" placeholder="Mobile Number"/>
                                </div>
                                <div class="input-row"><img src="assests/img/icon/email.png" alt=""/>
                                    <input type="email" placeholder="Email ID (optional)"/>
                                </div>
                                <div class="input-row"><img src="assests/img/icon/key.png" alt=""/>
                                    <input type="password" placeholder="Enter your password"/>
                                </div>
                                <div class="privacy-sec text-left">
                                    <div class="pretty smooth">
                                        <input type="checkbox">
                                        <label><i class="fa fa-check"></i> I agree <span>terms</span> &
                                            <span>conditions</span></label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button"><a href="#"><img src="assests/img/icon/lock.png" alt=""/> Create
                                        your account</a></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="input-row"><img src="assests/img/icon/email.png" alt=""/>
                                    <input type="email" placeholder="Email ID (optional)"/>
                                </div>
                                <div class="input-row"><img src="assests/img/icon/key.png" alt=""/>
                                    <input type="password" placeholder="Enter your password"/>
                                </div>
                                <div class="forgot-row"><a data-toggle="modal" data-target="#myModal3"
                                                           class="pull-right for-1" href="#">Forgot password?</a></div>
                                <div class="clearfix"></div>
                                <div class="privacy-sec text-left">
                                    <div class="pretty smooth">
                                        <input type="checkbox">
                                        <label><i class="fa fa-check"></i> Remember me</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button"><a href="#"><img src="assests/img/icon/lock.png" alt=""/> Secure
                                        Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade login-modal" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="col-sm-5">
                    <div class="modal-img"><img src="assests/img/modal-img.jpg" class="img-responsive" alt=""/></div>
                </div>
                <div class="col-sm-7 modal-text text-center">
                    <div class="form-sec">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">Login</a>
                            </li>
                            <li role="presentation" class="active"><a href="#profile2" aria-controls="profile2"
                                                                      role="tab" data-toggle="tab">Sign up</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="profile2">
                                <div class="input-row"><img src="assests/img/icon/phone.png" alt=""/>
                                    <input type="text" placeholder="Mobile Number"/>
                                </div>
                                <div class="input-row"><img src="assests/img/icon/email.png" alt=""/>
                                    <input type="email" placeholder="Email ID (optional)"/>
                                </div>
                                <div class="input-row"><img src="assests/img/icon/key.png" alt=""/>
                                    <input type="password" placeholder="Enter your password"/>
                                </div>
                                <div class="privacy-sec text-left">
                                    <div class="pretty smooth">
                                        <input type="checkbox">
                                        <label><i class="fa fa-check"></i> I agree <span>terms</span> &
                                            <span>conditions</span></label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button"><a href="#"><img src="assests/img/icon/lock.png" alt=""/> Create
                                        your account</a></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="home2">
                                <div class="input-row"><img src="assests/img/icon/email.png" alt=""/>
                                    <input type="email" placeholder="Email ID (optional)"/>
                                </div>
                                <div class="input-row"><img src="assests/img/icon/key.png" alt=""/>
                                    <input type="password" placeholder="Enter your password"/>
                                </div>
                                <div class="forgot-row"><a data-toggle="modal" data-target="#myModal3"
                                                           class="pull-right for-1" href="#">Forgot password?</a></div>
                                <div class="clearfix"></div>
                                <div class="privacy-sec text-left">
                                    <div class="pretty smooth">
                                        <input type="checkbox">
                                        <label><i class="fa fa-check"></i> Remember me</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button"><a href="#"><img src="assests/img/icon/lock.png" alt=""/> Secure
                                        Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade login-modal" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="col-sm-5">
                    <div class="modal-img"><img src="assests/img/modal-img.jpg" class="img-responsive" alt=""/></div>
                </div>
                <div class="col-sm-7 modal-text">
                    <div class="form-sec">
                        <h2>Forgot Password?</h2>
                        <p>To reset your password, please Enter your email below.</p>
                        <div class="input-row"><img src="assests/img/icon/email.png" alt=""/>
                            <input type="email" placeholder="Email ID (optional)"/>
                        </div>
                        <div class="button"><a href="#">Send</a></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
