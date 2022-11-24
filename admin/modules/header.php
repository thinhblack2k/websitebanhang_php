<?php
   if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
}
?>
<div id="top">
    <nav class="navbar navbar-static-top">
        <div class="container-fluid m-0">
            <div class="menu">
                <span class="toggle-left" id="menu-toggle">
                    <i class="fa fa-bars" style="margin-top: 6px;"></i>
                </span>
                <div class="menu-name">
                    Start Admin
                </div>
            </div>
            <div style="flex: 1; font-size: 20px;">
                <span>Welcome, <?php if(isset($_SESSION['TenTK'])) {
                    echo $_SESSION['TenTK'];
                } ?></span>
            </div>
            <div class="top_search_box d-none d-md-flex">
                <form class="header_input_search">
                    <input type="text" placeholder="Search" name="search">
                    <button type="submit">
                        <span class="font-icon-search"></span>
                    </button>
                    <div class="overlay"></div>
                </form>
            </div>
            <div class="topnav dropdown-menu-right">
                <div class="btn-group small_device_search" data-toggle="modal" data-target="#search_modal">
                    <i class="fa fa-search text-primary"></i>
                </div>
                <div class="btn-group">
                    <div class="notifications no-bg">
                        <a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i class="fa fa-envelope-o fa-1x"></i>
                            <span class="badge badge-pill badge-warning notifications_badge_top">8</span>
                        </a>
                        <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                            <div class="popover-header">You have 8 Messages</div>
                            <div id="messages">
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data"><strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data"><strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data"><strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data"><strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popover-footer">
                                <a href="" class="text-white">Inbox</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <div class="notifications messages no-bg">
                        <a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i class="fa fa-bell-o"></i>
                            <span class="badge badge-pill badge-danger notifications_badge_top">9</span>
                        </a>
                        <div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
                            <div class="popover-header">You have 9 Notifications</div>
                            <div id="notifications">
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>clay</strong>
                                            business propasals
                                            <br>
                                            <small class="primary_txt">20min Back.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>John</strong>
                                            meeting at Ritz
                                            <br>
                                            <small class="primary_txt">2hrs Back.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Luicy</strong>
                                            Request Invitation
                                            <br>
                                            <small class="primary_txt">Yesterday.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>clay</strong>
                                            business propasals
                                            <br>
                                            <small class="primary_txt">20min Back.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>John</strong>
                                            meeting at Ritz
                                            <br>
                                            <small class="primary_txt">2hrs Back.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Luicy</strong>
                                            Request Invitation
                                            <br>
                                            <small class="primary_txt">Yesterday.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                        </div>
                                        <div class="col-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popover-footer">
                                <a href="#" class="text-white">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <div class="user-settings no-bg">
                        <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                            <img src="img/icons8-user-24.png" class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar">
                        </button>
                        <div class="dropdown-menu admire_admin">
                            <a class="dropdown-item" href="setpass.php">
                                Thay đổi mật khẩu</a>
                            <a class="dropdown-item" href="index.php?dangxuat=1"><i class="fa fa-sign-out"></i>
                                Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>