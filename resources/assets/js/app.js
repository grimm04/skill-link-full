window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

window.Pusher = require('pusher-js');
import Echo from "laravel-echo";


// import $ from 'jquery';
// window.$ = window.jQuery = $;
// import 'jquery/dist/jquery.min.js'; 

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '71c7c174e2928ca7003f',
    cluster: 'ap1',
    encrypted: true
});

var notifications = [];
var moment = require('moment');

const NOTIFICATION_TYPES = {
    follow: 'App\\Notifications\\UserFollowed',
    newPost: 'App\\Notifications\\NewPost',
    like: 'App\\Notifications\\UserLikes',
    comments: 'App\\Notifications\\UserComments',
    share: 'App\\Notifications\\ShareProfile',
    message: 'App\\Notifications\\UserMessage',
    postgroup: 'App\\Notifications\\PostGroup',
    likegroup: 'App\\Notifications\\LikeGroup',
    commentgroup: 'App\\Notifications\\CommentGroup',
};

$(document).ready(function() {
    // check if there's a logged in user
    if (Laravel.userId) {
        $.get('/notifications', function(data) {
            addNotifications(data, "#notifications");  
        });

        
    } 
});

// $(document).ready(function() {
//     if(Laravel.userId) {
//         //...
//         winxdow.Echo.private(`App.User.${Laravel.userId}`)
//             .notification((notification) => {
//                 addNotifications([notification], '#notifications');
//             });
//     }
// });

function addNotifications(newNotifications, target) {
    notifications = _.concat(notifications, newNotifications);
    // show only last 5 notifications
    notifications.slice(0, 3);
    showNotifications(notifications, target); 
    showNotificationsDetail(notifications, target);
}

// function addNotificationsDetail(newNotifications, target) {
//     notifications = _.concat(notifications, newNotifications);
//     // show only last 5 notifications
//     // notifications.slice(0, 1); 
// }


//...
function showNotifications(notifications, target) {
    if (notifications.length) {
        var htmlElements = notifications.map(function(notification) {
            return makeNotification(notification);
        });
        $(target + 'Menu').html(htmlElements.join(''));
        $(target).addClass('has-notifications')
    } else {
        $(target + 'Menu').html('No notifications');
        $(target).removeClass('has-notifications');
    }
}

//...

// Make a single notification string
function makeNotification(notification) {
    if (Laravel.userId != notification.data.user_id) {
        var to = routeNotification(notification);
        var notificationText = makeNotificationText(notification);
        var notificationDate = makeNotificationDate(notification);
        const avatar = notification.data.avatar;
        // return '<li><a href="' + to + '">' + notificationText + '</a></li>';
        if (avatar == null) { 
         return '<a href="' + to + '" class="grey"><div class="media"><div class="media-left"> <div class="media-object"> <img src="' + base_url + 'avatar/default.png" alt=""></div> </div> <div class="media-body"> <span class="media-heading">' + notificationText + ' </span> <br /> <span>' + notificationDate + '</span> </div> </div>  </a>';
        }else{
            return '<a href="' + to + '" class="grey"><div class="media"><div class="media-left"> <div class="media-object"> <img src="' + base_url + 'avatar/' + avatar + '" alt=""></div> </div> <div class="media-body"> <span class="media-heading">' + notificationText + ' </span> <br /> <span>' + notificationDate + '</span> </div> </div>  </a>';
        }
    }
}


function showNotificationsDetail(notifications, target) {
    if (notifications.length) {
        var htmlElements = notifications.map(function(notification) {
            return makeNotificationDetail(notification);
        });
        $(target + 'MenuDetail').html(htmlElements.join(''));
        $(target).addClass('has-notifications')
    } else {
        $(target + 'MenuDetail').html('No notifications');
        $(target).removeClass('has-notifications');
    }
}

// Make a single notification string
function makeNotificationDetail(notification) {
    if (Laravel.userId != notification.data.user_id) {
        if (notification.status != 2) {
            var to = routeNotification(notification);
            var notificationText = makeNotificationText(notification);
            var notificationDate = makeNotificationDate(notification);
            const avatar = notification.data.avatar;
            const name = notification.data.name;
            const id = notification.data.id;
            const idnotif = notification.id; 
             
            if (avatar == null) {
                return '<div class="box" style="padding: 10px; margin-bottom: 15px;"><div class="row"><div class="col-xs-10 col-sm-8 col-md-8"> <div class="media" style="padding: 0px;">  <div class="media-left"> <img src="' + base_url + 'avatar/default.png" alt="bell" class="media-object" style="width: 60px; height: 60px;"> </div> <div class="media-body"> <a href="' + to + '" class="grey">  <span class="media-heading" >' + notificationText + '</span><br> <span style="font-size: 10px;">' + notificationDate + '</span><br> <a href="' + to + '" class="btn bg-blue-dark" style="color: #fff;font-size: 12px;">See Detail</a> </a> </div> </div> </div> <div class="col-xs-2 col-sm-4 col-md-4"> <div class="setting-more"> <a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting"> <i class="fa fa-ellipsis-h"></i> </a> <ul class="dropdown-menu right"> <a onclick="return deletenotification(this);" data-id="' + idnotif + '" class="btn blue-dark">Delete</a><br> <a onclick="return unfollow(this);" data-id="' + id + '" class="btn blue-dark">Unfollow ' + name + '</a><br> <a href="" class="btn blue-dark">Turn off</a><br> </ul> </div> <div class="clearfix"></div> </div> </div></div> ';
            }else if(avatar === 'undifened'){ 
                return '<div class="box" style="padding: 10px; margin-bottom: 15px;"><div class="row"><div class="col-xs-10 col-sm-8 col-md-8"> <div class="media" style="padding: 0px;">  <div class="media-left"> <img src="' + base_url + 'avatar/default.png" alt="bell" class="media-object" style="width: 60px; height: 60px;"> </div> <div class="media-body"> <a href="' + to + '" class="grey">  <span class="media-heading" >' + notificationText + '</span><br> <span style="font-size: 10px;">' + notificationDate + '</span><br> <a href="' + to + '" class="btn bg-blue-dark" style="color: #fff;font-size: 12px;">See Detail</a> </a> </div> </div> </div> <div class="col-xs-2 col-sm-4 col-md-4"> <div class="setting-more"> <a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting"> <i class="fa fa-ellipsis-h"></i> </a> <ul class="dropdown-menu right"> <a onclick="return deletenotification(this);" data-id="' + idnotif + '" class="btn blue-dark">Delete</a><br> <a onclick="return unfollow(this);" data-id="' + id + '" class="btn blue-dark">Unfollow ' + name + '</a><br> <a href="" class="btn blue-dark">Turn off</a><br> </ul> </div> <div class="clearfix"></div> </div> </div></div> ';
            }else {

            return '<div class="box" style="padding: 10px; margin-bottom: 15px;" ><div class="row"><div class="col-xs-10 col-sm-8 col-md-8"> <div class="media" style="padding: 0px;">  <div class="media-left"> <img src="' + base_url + 'avatar/' + avatar + '" alt="bell" class="media-object" style="width: 60px; height: 60px;"> </div> <div class="media-body"> <a href="' + to + '" class="grey">  <span class="media-heading" >' + notificationText + '</span><br> <span style="font-size: 10px;">' + notificationDate + '</span><br> <a href="' + to + '" class="btn bg-blue-dark" style="color: #fff;font-size: 12px;">See Detail</a> </a> </div> </div> </div> <div class="col-xs-2 col-sm-4 col-md-4"> <div class="setting-more"> <a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting"> <i class="fa fa-ellipsis-h"></i> </a> <ul class="dropdown-menu right"> <a onclick="return deletenotification(this);" data-id="' + idnotif + '" class="btn blue-dark">Delete</a><br> <a onclick="return unfollow(this);" data-id="' + id + '" class="btn blue-dark">Unfollow ' + name + '</a><br> <a href="" class="btn blue-dark">Turn off</a><br> </ul> </div> <div class="clearfix"></div> </div> </div></div> ';
            }
        }
    }
}

// get the notification route based on it's type
function routeNotification(notification) {
    var to = `?read=${notification.id}`;
    if (notification.type === NOTIFICATION_TYPES.follow) {
        const username = notification.data.username;
        to = `network/post/${username}` + to;
    } else if (notification.type === NOTIFICATION_TYPES.newPost) {
        const postId = notification.data.post_id;
        to = `post/${postId}/detail` + to;
    } else if (notification.type === NOTIFICATION_TYPES.like) {
        const postId = notification.data.post_id;
        to = `post/${postId}/detail` + to;
    } else if (notification.type === NOTIFICATION_TYPES.comments) {
        const postId = notification.data.post_id;
        to = `post/${postId}/detail` + to;
    } else if (notification.type === NOTIFICATION_TYPES.share) {
        const username = notification.data.username;
        to = `network/post/${username}` + to;
    } else if (notification.type === NOTIFICATION_TYPES.message) {
        const username = notification.data.message_username;
        to = `message/personal_chat/${username}` + to;
    } else if (notification.type === NOTIFICATION_TYPES.postgroup) {
        if (Laravel.userId != notification.data.user_id) {
            const post_id = notification.data.post_id;
            to = `post/${post_id}/detail` + to;
        }
    } else if (notification.type === NOTIFICATION_TYPES.likegroup) {
        const ref_number = notification.data.ref_number;
        to = `group/${ref_number}` + to;
    } else if (notification.type === NOTIFICATION_TYPES.commentgroup) {
        const ref_number = notification.data.ref_number;
        to = `group/${ref_number}` + to;
    }
    return '/' + to;
}

// get the notification text based on it's type
function makeNotificationText(notification) {
    var text = '';
    if (notification.type === NOTIFICATION_TYPES.follow) {
        const name = notification.data.name;
        text += '<strong>' + name + '</strong> followed you';
    } else if (notification.type === NOTIFICATION_TYPES.newPost) {
        const name = notification.data.name;
        text += `<strong>${name}</strong> published a post`;
    } else if (notification.type === NOTIFICATION_TYPES.like) {
        const name = notification.data.name;
        text += `<strong>${name}</strong> liked your post`;
    } else if (notification.type === NOTIFICATION_TYPES.comments) {
        const name = notification.data.name;
        text += `<strong>${name}</strong> Comment your post`;
    } else if (notification.type === NOTIFICATION_TYPES.share) {
        const name = notification.data.name;
        text += `<strong>${name}</strong> Just Change Profile`;
    } else if (notification.type === NOTIFICATION_TYPES.message) {
        const name = notification.data.name;
        text += `Message from <strong>${name}</strong> `;
    } else if (notification.type === NOTIFICATION_TYPES.postgroup) {
        if (Laravel.userId != notification.data.user_id) {
            const name = notification.data.name;
            const group_name = notification.data.group_name;
            text += `<strong>${name}</strong> Post on ${group_name}`;
        }
    } else if (notification.type === NOTIFICATION_TYPES.likegroup) {
        const name = notification.data.name;
        text += `<strong>${name}</strong> liked your post`;
    } else if (notification.type === NOTIFICATION_TYPES.commentgroup) {
        const name = notification.data.name;
        text += `<strong>${name}</strong> Comment your post`;
    }
    return text;
}

function makeNotificationDate(notification) {
    var text = '';
    const date = moment(notification.created_at).fromNow();
    text += '<span>' + date + '</span>';

    return text;
}