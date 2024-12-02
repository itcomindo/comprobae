<?php

/**
 *
 * Part Welcome Footer
 * @package com
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<div id="welcome-box" class="">
    <div class="wbox-closer">X</div>
    <div class="inner">
        <h3>Welcome to Comproblog</h3>
        <p>Comproblog is free company profile WordPress theme for any purpose, flexibel customize, mobile friendly, SEO optimazation.</p>
        <ul class="items list-no-style wbox-list">
            <li class="item"><a href="#" title="Learn More">Learn More about product</a></li>
            <li class="item"><a href="#" title="Book Meeting">Book Meeting</a></li>
            <li class="item"><a href="#" title="Start a free trial">Start a free trial</a></li>
            <li class="item"><a href="#" title="Watch Demo">Watch 3-minute demo</a></li>
        </ul>
        <p>Comproblog is free company profile WordPress theme for any purpose, flexibel customize, mobile friendly, SEO optimazation.</p>
    </div>
</div>

<div id="chat-trigger" class="">
    <div class="inner">
        <div class="chat-toggle"><i class="far fa-message"></i></div>
    </div>
</div>

<div id="chat-box" class="">
    <div class="inner">
        <div class="top">
            <div class="inner-top">
                <div class="left">Logo</div>
                <div class="right close-chat-box">X</div>
            </div>
        </div>
        <div class="bot">
            <div class="inner-bot">
                <small class="current-date"></small>
                <div class="items">
                    <div class="item dum">
                        <div class="logo">C</div>
                        <div class="content text text-smaller">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugiat magnam perferendis et doloribus voluptate, debitis esse optio nam, omnis ipsam. Nulla inventore qui praesentium!</div>
                    </div>
                    <div class="item">
                        <ul class="items list-no-style wbox-list">
                            <li class="item"><a href="#" title="Learn More">Learn More about product</a></li>
                            <li class="item"><a href="#" title="Book Meeting">Book Meeting</a></li>
                            <li class="item"><a href="#" title="Start a free trial">Start a free trial</a></li>
                            <li class="item"><a href="#" title="Watch Demo">Watch 3-minute demo</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="input-box">
            <div class="inner-input-box">
                <div class="left">
                    <textarea name="input-box" id="input-box"></textarea>
                </div>
                <div class="right">
                    <div class="send-chat-box"><i class="fab fa-whatsapp"></i></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //use Vanilla Js to create current date and time with format: 2021-01-01 12:00:00 then append it to .current-date.
        const currentDate = document.querySelector('.current-date');
        const date = new Date();
        const year = date.getFullYear();
        const month = date.getMonth() + 1;
        const day = date.getDate();
        const hour = date.getHours();
        const minute = date.getMinutes();
        const second = date.getSeconds();
        currentDate.innerHTML = `${year}-${month}-${day} ${hour}:${minute}:${second}`;
    </script>
</div>