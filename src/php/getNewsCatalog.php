<?php
header("Access-Control-Allow-Origin: *");
$data = [
    "status"=> 0,
    "message"=>[
        [
            "id"=>13,
            "title"=>"海贼王",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为海贼王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>14,
            "title"=>"火影忍者",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为火影王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>15,
            "title"=>"死神",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为死神王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>16,
            "title"=>"家庭教师",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为教室王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>17,
            "title"=>"银魂",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为魂王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>18,
            "title"=>"咒术回战",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为扑街王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>19,
            "title"=>"鬼灭之刃",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为鬼王王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>20,
            "title"=>"哆啦A梦",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为梦王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>21,
            "title"=>"海贼王",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为海贼王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>22,
            "title"=>"海贼王",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为海贼王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>23,
            "title"=>"海贼王",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为海贼王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
        [
            "id"=>24,
            "title"=>"海贼王",
            "add_time"=>"2015-04-16T03:05:34.000Z",
            "zhaiyao"=>"我要成为海贼王",
            "click"=>"1",
            "img_url"=>"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2Ffb%2Fa2%2F69%2Ffba2696b9fa4120d758eba82c04f1aad.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1649048566&t=f287a3b87185bc29c04cd8c80e293f91"
        ],
    ]
];
echo json_encode($data);
?>
   



