<?php 

use App\Models\job;

?>
@include('layouts.header')
<style>
    html,
    body,
    div,
    h1,
    h2,
    h3,
    p,
    pre {
        margin: 0;
        padding: 0;

        color: #333;
    }


    p {
        margin-bottom: 40px;
        text-align: center;
    }

    a {
        text-decoration: underline;
        color: #1889e6;
    }

    a:hover {
        text-decoration: none;
    }

    .bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


    /**/
    /* main styles */
    /**/
    .pcss3t {
        margin: 0;
        padding: 0;
        border: 0;
        outline: none;
        font-size: 0;
        text-align: left;

    }

    .pcss3t>input {
        position: absolute;
        left: -9999px;
    }

    .pcss3t>label {
        position: relative;
        display: inline-block;
        margin: 0;
        padding: 0;
        border: 0;
        outline: none;
        cursor: pointer;
        transition: all 0.1s;
        -o-transition: all 0.1s;
        -ms-transition: all 0.1s;
        -moz-transition: all 0.1s;
        -webkit-transition: all 0.1s;
    }

    .pcss3t>label i {
        display: block;
        float: left;
        margin: 16px 8px 0 -2px;
        padding: 0;
        border: 0;
        outline: none;
        font-family: Raleway;
        font-style: normal;
        font-size: 17px;
    }

    .pcss3t>input:checked+label {
        cursor: default;
    }

    .pcss3t>ul {
        list-style: none;
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
        border: 0;
        outline: none;
        font-size: 13px;
    }

    .pcss3t>ul>li {
        position: absolute;
        width: 100%;
        overflow: auto;
        padding: 30px 40px 40px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        opacity: 0;
        transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }

    .pcss3t>.tab-content-first:checked~ul .tab-content-first,
    .pcss3t>.tab-content-2:checked~ul .tab-content-2,
    .pcss3t>.tab-content-3:checked~ul .tab-content-3,
    .pcss3t>.tab-content-4:checked~ul .tab-content-4,
    .pcss3t>.tab-content-5:checked~ul .tab-content-5,
    .pcss3t>.tab-content-6:checked~ul .tab-content-6,
    .pcss3t>.tab-content-7:checked~ul .tab-content-7,
    .pcss3t>.tab-content-8:checked~ul .tab-content-8,
    .pcss3t>.tab-content-9:checked~ul .tab-content-9,
    .pcss3t>.tab-content-last:checked~ul .tab-content-last {
        z-index: 1;
        top: 0;
        left: 0;
        opacity: 1;
        -webkit-transform: scale(1, 1);
        -webkit-transform: rotate(0deg);
    }


    /*----------------------------------------------------------------------------*/
    /*                                 EXTENSIONS                                 */
    /*----------------------------------------------------------------------------*/

    /**/
    /* auto height */
    /**/
    .pcss3t-height-auto>ul {
        height: auto !important;
    }

    .pcss3t-height-auto>ul>li {
        position: static;
        display: none;
        height: auto !important;
    }

    .pcss3t-height-auto>.tab-content-first:checked~ul .tab-content-first,
    .pcss3t-height-auto>.tab-content-2:checked~ul .tab-content-2,
    .pcss3t-height-auto>.tab-content-3:checked~ul .tab-content-3,
    .pcss3t-height-auto>.tab-content-4:checked~ul .tab-content-4,
    .pcss3t-height-auto>.tab-content-5:checked~ul .tab-content-5,
    .pcss3t-height-auto>.tab-content-last:checked~ul .tab-content-last {
        display: block;
    }


    /**/
    /* grid */
    /**/
    .pcss3t .grid-row {
        margin-top: 20px;
    }

    .pcss3t .grid-row:after {
        content: '';
        display: table;
        clear: both;
    }

    .pcss3t .grid-row:first-child {
        margin-top: 0;
    }

    .pcss3t .grid-col {
        display: block;
        float: left;
        margin-left: 2%;
    }

    .pcss3t .grid-col:first-child {
        margin-left: 0;
    }

    .pcss3t .grid-col .inner {
        padding: 10px 0;
        border-radius: 5px;
        background: #f2f2f2;
        text-align: center;
    }

    .pcss3t .grid-col-1 {
        width: 15%;
    }

    .pcss3t .grid-col-2 {
        width: 32%;
    }

    .pcss3t .grid-col-3 {
        width: 49%;
    }

    .pcss3t .grid-col-4 {
        width: 66%;
    }

    .pcss3t .grid-col-5 {
        width: 83%;
    }

    .pcss3t .grid-col-offset-1 {
        margin-left: 19%;
    }

    .pcss3t .grid-col-offset-1:first-child {
        margin-left: 17%;
    }

    .pcss3t .grid-col-offset-2 {
        margin-left: 36%;
    }

    .pcss3t .grid-col-offset-2:first-child {
        margin-left: 34%;
    }

    .pcss3t .grid-col-offset-3 {
        margin-left: 53%;
    }

    .pcss3t .grid-col-offset-3:first-child {
        margin-left: 51%;
    }

    .pcss3t .grid-col-offset-4 {
        margin-left: 70%;
    }

    .pcss3t .grid-col-offset-4:first-child {
        margin-left: 68%;
    }

    .pcss3t .grid-col-offset-5:first-child {
        margin-left: 85%;
    }


    /**/
    /* typography */
    /**/
    .pcss3t .typography {
        color: #666;
    }

    .pcss3t .typography h1,
    .pcss3t .typography h2,
    .pcss3t .typography h3,
    .pcss3t .typography h4,
    .pcss3t .typography h5,
    .pcss3t .typography h6 {
        margin: 40px 0 0 0;
        padding: 0;
        font-family: Raleway;
        text-align: left;
        color: #333;
    }

    .pcss3t .typography h1 {
        font-size: 40px;
        line-height: 60px;
        text-shadow: 3px 3px rgba(0, 0, 0, 0.1);
    }

    .pcss3t .typography h2 {
        font-size: 32px;
        line-height: 48px;
        text-shadow: 2px 2px rgba(0, 0, 0, 0.1);
    }

    .pcss3t .typography h3 {
        font-size: 26px;
        line-height: 38px;
        text-shadow: 1px 1px rgba(0, 0, 0, 0.1);
    }

    .pcss3t .typography h4 {
        font-size: 20px;
        line-height: 30px;
    }

    .pcss3t .typography h5 {
        font-size: 15px;
        line-height: 23px;
        text-transform: uppercase;
    }

    .pcss3t .typography h6 {
        font-size: 13px;
        line-height: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .pcss3t .typography p {
        margin: 20px 0 0 0;
        padding: 0;
        line-height: 20px;
        text-align: left;
    }

    .pcss3t .typography ul,
    .pcss3t .typography ol {
        list-style: none;
        margin: 20px 0 0 0;
        padding: 0;
    }

    .pcss3t .typography li {
        position: relative;
        margin-top: 5px;
        padding-left: 20px;
    }

    .pcss3t .typography li ul,
    .pcss3t .typography li ol {
        margin-top: 5px;
    }

    .pcss3t .typography ul li:before {
        content: '';
        position: absolute;
        top: 8px;
        left: 0;
        width: 6px;
        height: 4px;
        background: #404040;
    }

    .pcss3t .typography ol {
        counter-reset: list1;
    }

    .pcss3t .typography ol>li:before {
        counter-increment: list1;
        content: counter(list1)'.';
        position: absolute;
        top: 0;
        left: 0;
    }

    .pcss3t .typography a {
        text-decoration: underline;
        color: #1889e6;
    }

    .pcss3t .typography a:hover {
        text-decoration: none;
    }

    .pcss3t .typography .pic {
        padding: 4px;
        border: 1px dotted #ccc;
    }

    .pcss3t .typography .pic img {
        display: block;
    }

    .pcss3t .typography .pic-right {
        float: right;
        margin: 0 0 10px 20px;
    }

    .pcss3t .typography .link {
        text-decoration: underline;
        color: #1889e6;
        cursor: pointer;
    }

    .pcss3t .typography .link:hover {
        text-decoration: none;
    }

    .pcss3t .typography h1:first-child,
    .pcss3t .typography h2:first-child,
    .pcss3t .typography h3:first-child,
    .pcss3t .typography h4:first-child,
    .pcss3t .typography h5:first-child,
    .pcss3t .typography h6:first-child,
    .pcss3t .typography p:first-child {
        margin-top: 0;
    }

    .pcss3t .typography .text-center {
        text-align: center;
    }

    .pcss3t .typography .text-right {
        text-align: right;
    }


    /**/
    /* steps */
    /**/
    .pcss3t-steps>label {
        cursor: default;
    }


    /**/
    /* animation effects */
    /**/
    .pcss3t-effect-scale>ul>li {
        -webkit-transform: scale(0.1, 0.1);
    }

    .pcss3t-effect-rotate>ul>li {
        -webkit-transform: rotate(180deg);
    }

    .pcss3t-effect-slide-top>ul>li {
        top: -40px;
    }

    .pcss3t-effect-slide-right>ul>li {
        left: 80px;
    }

    .pcss3t-effect-slide-bottom>ul>li {
        top: 40px;
    }

    .pcss3t-effect-slide-left>ul>li {
        left: -80px;
    }



    /*----------------------------------------------------------------------------*/
    /*                                   LAYOUTS                                  */
    /*----------------------------------------------------------------------------*/

    /**/
    /* top right */
    /**/
    .pcss3t-layout-top-right {
        text-align: right;
    }





    /*----------------------------------------------------------------------------*/
    /*                                    ICONS                                   */
    /*----------------------------------------------------------------------------*/

    /**/
    /* icons positions */
    /**/
    .pcss3t-icons-top>label {
        text-align: center;
    }

    .pcss3t-icons-top>label i {
        float: none;
        margin: 0 auto -10px;
        padding-top: 17px;
        font-size: 23px;
        line-height: 23px;
        text-align: center;
    }

    .pcss3t-icons-right>label i {
        float: right;
        margin: 0 -2px 0 8px;
    }

    .pcss3t-icons-bottom>label {
        text-align: center;
    }

    .pcss3t-icons-bottom>label i {
        float: none;
        margin: -10px auto 0;
        padding-bottom: 17px;
        font-size: 23px;
        line-height: 23px;
        text-align: center;
    }

    .pcss3t-icons-only>label i {
        float: none;
        margin: 0 auto;
        font-size: 23px;
    }


    /**/
    /* font awesome */
    /**/



    /*----------------------------------------------------------------------------*/
    /*                               RESPONSIVENESS                               */
    /*----------------------------------------------------------------------------*/

    /**/
    /* pad */
    /**/
    @media screen and (max-width: 980px) {}


    /**/
    /* phone */
    /**/
    @media screen and (max-width: 767px) {
        .pcss3t>label {
            display: block;
        }

        .pcss3t>.right {
            float: none;
        }
    }



    /*----------------------------------------------------------------------------*/
    /*                                   THEMES                                   */
    /*----------------------------------------------------------------------------*/

    /**/
    /* default */
    /**/
    .pcss3t>label {
        padding: 0 20px;
        background: #e5e5e5;
        font-size: 13px;
        line-height: 49px;
    }

    .pcss3t>label:hover {
        background: #f2f2f2;
    }

    .pcss3t>input:checked+label {
        background: #fff;
    }

    .pcss3t>ul {
        background: #fff;
        text-align: left;
    }

    .pcss3t-steps>label:hover {
        background: #e5e5e5;
    }


    /**/
    /* theme 1 */
    /**/
    .pcss3t-theme-1>label {
        margin: 0 5px 5px 0;
        border-radius: 5px;
        background: #fff;
        box-shadow: 0 2px rgba(0, 0, 0, 0.2);
        color: #808080;
        opacity: 0.8;
    }

    .pcss3t-theme-1>label:hover {
        background: #fff;
        opacity: 1;
    }

    .pcss3t-theme-1>input:checked+label {
        margin-bottom: 0;
        padding-bottom: 5px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        color: #2b82d9;
        opacity: 1;
    }

    .pcss3t-theme-1>ul {
        border-radius: 5px;
        box-shadow: 0 3px rgba(0, 0, 0, 0.2);
    }

    .pcss3t-theme-1>.tab-content-first:checked~ul {
        border-top-left-radius: 0;
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-1>label {
            margin-right: 0;
        }

        .pcss3t-theme-1>input:checked+label {
            margin-bottom: 5px;
            padding-bottom: 0;
            border-radius: 5px;
        }

        .pcss3t-theme-1>.tab-content-first:checked~ul {
            border-top-left-radius: 5px;
        }
    }


    /**/
    /* theme 2 */
    /**/
    .pcss3t-theme-2 {
        padding: 5px;
        background: rgba(0, 0, 0, 0.2);
    }

    .pcss3t-theme-2>label {
        margin-right: 0;
        margin-bottom: 0;
        background: none;
        border-radius: 0;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        color: #fff;
        opacity: 1;
    }

    .pcss3t-theme-2>label:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .pcss3t-theme-2>input:checked+label {
        padding-bottom: 0;
        background: #fff;
        background: linear-gradient(to bottom, #e5e5e5 0%, #ffffff 100%);
        background: -o-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        background: -ms-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        background: -moz-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        background: -webkit-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=0);
        text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.5);
        color: #822bd9;
    }

    .pcss3t-theme-2>ul {
        margin: 0 -5px -5px;
        border-radius: 0;
        box-shadow: none;
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-2>ul {
            margin-top: 5px;
        }
    }


    /**/
    /* theme 3 */
    /**/
    .pcss3t-theme-3 {
        background: rgba(0, 0, 0, 0.8);
    }

    .pcss3t-theme-3>label {
        background: none;
        border-right: 1px dotted rgba(255, 255, 255, 0.5);
        text-align: center;
        color: #fff;
        opacity: 0.6;
    }

    .pcss3t-theme-3>label:hover {
        background: none;
        color: #d9d92b;
        opacity: 0.8;
    }

    .pcss3t-theme-3>input:checked+label {
        background: #d9d92b;
        color: #000;
        opacity: 1;
    }

    .pcss3t-theme-3>ul {
        border-top: 4px solid #d9d92b;
        border-bottom: 4px solid #d9d92b;
        border-radius: 0;
        box-shadow: none;
    }


    /**/
    /* theme 4 */
    /**/
    .pcss3t-theme-4>label {
        margin: 0 10px 10px 0;
        border-radius: 5px;
        background: #78c5fd;
        background: linear-gradient(to bottom, #78c5fd 0%, #2c8fdd 100%);
        background: -o-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        background: -ms-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        background: -moz-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        background: -webkit-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#78c5fd', endColorstr='#2c8fdd', GradientType=0);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 1px rgba(0, 0, 0, 0.5);
        line-height: 39px;
        text-shadow: 0 1px rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .pcss3t-theme-4>label:hover {
        background: #90cffc;
        background: linear-gradient(to bottom, #90cffc 0%, #439bde 100%);
        background: -o-linear-gradient(top, #90cffc 0%, #439bde 100%);
        background: -ms-linear-gradient(top, #90cffc 0%, #439bde 100%);
        background: -moz-linear-gradient(top, #90cffc 0%, #439bde 100%);
        background: -webkit-linear-gradient(top, #90cffc 0%, #439bde 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#90cffc', endColorstr='#439bde', GradientType=0);
    }

    .pcss3t-theme-4>input:checked+label {
        top: 1px;
        background: #5f9dc9;
        background: linear-gradient(to bottom, #5f9dc9 0%, #2270ab 100%);
        background: -o-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        background: -ms-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        background: -moz-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        background: -webkit-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5f9dc9', endColorstr='#2270ab', GradientType=0);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.5), 0 1px rgba(255, 255, 255, 0.5);
        text-shadow: none;
    }

    .pcss3t-theme-4>ul {
        border-radius: 5px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-4>label {
            margin-right: 0;
        }
    }


    /**/
    /* theme 5 */
    /**/
    .pcss3t-theme-5 {
        padding: 15px;
        border-radius: 5px;
        background: #ad6395;
        background: linear-gradient(to right, #ad6395 0%, #a163ad 100%);
        background: -o-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        background: -ms-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        background: -moz-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        background: -webkit-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5f9dc9', endColorstr='#a163ad', GradientType=1);
    }

    .pcss3t-theme-5>label {
        margin-right: 10px;
        margin-bottom: 15px;
        background: none;
        border-radius: 5px;
        text-align: center;
        color: #fff;
        opacity: 1;
    }

    .pcss3t-theme-5>label:hover {
        background: rgba(255, 255, 255, 0.15);
    }

    .pcss3t-theme-5>input:checked+label {
        background: rgba(255, 255, 255, 0.3);
        color: #000;
    }

    .pcss3t-theme-5>input:checked+label:after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        margin-top: 10px;
        margin-left: -6px;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        border-left: 6px solid transparent;
    }

    .pcss3t-theme-5>ul {
        margin: 0 -15px -15px;
        border-radius: 0 0 5px 5px;
        box-shadow: none;
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-5>input:checked+label:after {
            display: none;
        }
    }


    /*----------------------------------------------------------------------------*/
    /*                               CUSTOMIZATION                                */
    /*----------------------------------------------------------------------------*/

    /**/
    /* height */
    /**/
    .pcss3t>ul,
    .pcss3t>ul>li {
        height: 370px;
    }

    .pcss3t {
        padding-top: 15vh;
    }
</style>
<style>
    .blog-grid {
        position: relative;
        box-shadow: 0 1rem 1.75rem 0 rgba(45, 55, 75, 0.1);
        height: 100%;
        border: 0.0625rem solid rgba(220, 224, 229, 0.6);
        border-radius: 0.25rem;
        transition: all .2s ease-in-out;

    }

    .blog-grid span {
        color: #292dc2
    }

    .blog-grid img {
        width: 100%;
        height: 50%;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem
    }

    .blog-grid-text {
        position: relative
    }

    .blog-grid-text>span {
        color: #292dc2;
        font-size: 13px;
        padding-right: 5px
    }

    .blog-grid-text h4 {
        line-height: normal;
        margin-bottom: 15px
    }

    .blog-grid-text .meta-style2 {
        border-top: 1px dashed #cee1f8;
        padding-top: 15px
    }

    .blog-grid-text .meta-style2 ul li {
        margin-bottom: 0;
        font-weight: 500
    }

    .blog-grid-text .meta-style2 ul li:last-child {
        margin-right: 0
    }

    .blog-grid-text ul {
        margin: 0;
        padding: 0
    }

    .blog-grid-text ul li {
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        margin: 5px 10px 5px 0
    }

    .blog-grid-text ul li:last-child {
        margin-right: 0
    }

    .blog-grid-text ul li i {
        font-size: 14px;
        font-weight: 600;
        margin-right: 5px
    }

    .blog-grid-text p {
        font-weight: 400;
        padding: 0
    }

    .blog-list-left-heading:after,
    .blog-title-box:after {
        content: '';
        height: 2px
    }

    .blog-grid-simple-content a:hover {
        color: #1d184a
    }

    .blog-grid-simple-content a:hover:after {
        color: #1d184a
    }

    .blog-grid-text {
        position: relative
    }

    .blog-grid-text>span {
        color: #292dc2;
        font-size: 13px;
        padding-right: 5px
    }

    .blog-grid-text h4 {
        line-height: normal;
        margin-bottom: 15px
    }

    .blog-grid-text .meta-style2 {
        border-top: 1px dashed #cee1f8 !important;
        padding-top: 15px
    }

    .blog-grid-text .meta-style2 ul li {
        margin-bottom: 0;
        font-weight: 500
    }

    .blog-grid-text .meta-style2 ul li:last-child {
        margin-right: 0
    }

    .blog-grid-text ul {
        margin: 0;
        padding: 0
    }

    .blog-grid-text ul li {
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        margin: 5px 10px 5px 0
    }

    .blog-grid-text ul li:last-child {
        margin-right: 0
    }

    .blog-grid-text ul li i {
        font-size: 14px;
        font-weight: 600;
        margin-right: 5px
    }

    .blog-grid-text p {
        font-weight: 400;
        padding: 0
    }

    a,
    a:active,
    a:focus {
        color: #575a7b;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }



    .mt-6,
    .my-6 {
        margin-top: 3.5rem;
    }
</style>
<!-- CSS styles for the pop-up -->
<style>
    .popup-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        font-family: Raleway;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        overflow: auto;
    }

    .popup-content {
        position: relative;
        margin: 5% auto;
        padding: 20px;
        background-color: #fff;
        width: 80%;
        max-width: 80%;
        font-family: Raleway;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    @media (min-width: 1200px) and (max-width: 1800px)
    {
        .popup-content {
        position: relative;
        margin: 5% auto;
        padding: 20px;
        background-color: #fff;
        width: 80%;
        max-width: 50%;
        font-family: Raleway;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    } 
    }
    .popup-content .description {
        max-height: 200px;
        /* Set the maximum height of the description */
        overflow-y: auto;
        /* Add scrollbar if content overflows vertically */
    }


    .close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 20px;
    height: 20px;
    padding: 0;
    background: none;
    border: none;
    font-size: 20px;
    color: red;
    cursor: pointer;
}

.close-button::before,
.close-button::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 5px;
    background-color: red;
    transform: translate(-50%, -50%) rotate(45deg);
}

.close-button::after {
    transform: translate(-50%, -50%) rotate(-45deg);
}



    .apply-button {
        padding: 5px 10px;
        background-color: rgb(37, 87, 167);
        color: #fff;
        border: none;
        border-radius: 3px;
        font-size: 18px;
        cursor: pointer;
    }

    .apply-button:hover {
        background-color: #1889e6;
    }

    /* CSS */
    .button-7 {
        background-color: #002E5B;
        border: 1px solid transparent;
        border-radius: 3px;
        box-shadow: rgba(255, 255, 255, .4) 0 1px 0 0 inset;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", "Liberation Sans", sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 1.15385;
        margin: 0;
        outline: none;
        padding: 10px 15px;
        position: relative;
        text-align: center;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        white-space: nowrap;
    }

    .button-7:hover,
    .button-7:focus {
        background-color: #07c;
    }

    .button-7:focus {
        box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
    }

    .button-7:active {
        background-color: #0064bd;
        box-shadow: none;
    }
</style>

<section>
    <div class="container">
        <div class="page">
            <h1>Pure CSS Tabs</h1>
            <!-- tabs -->
            <div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
                <input type="radio" name="pcss3t" checked id="tab1" class="tab-content-first">
                <label for="tab1"><i class="icon-bolt"></i>All</label>
                @foreach ($categories as $info)
                <input type="radio" name="pcss3t" id="tab{{ $loop->index + 2 }}" class="tab-content-{{ $loop->index + 2 }}">
                <label for="tab{{ $loop->index + 2 }}"><i class="icon-picture"></i>{{$info->category}}</label>
                @endforeach

                <ul>
                    <li class="tab-content tab-content-first typography">
                        <h1>All Jobs</h1>

                        <div class="row mt-n5">
                            @foreach ($category as $info)
                            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="blog-grid">
                                    <div class="blog-grid-img position-relative"><img alt="img" style="width:100%;height: 50vh;" src="jobimage/{{$info->image}}"></div>
                                    <div class="blog-grid-text p-4">
                                        <h3 class="h5 mb-3">{{$info->title}}</h3>
                                        <p class="display-30">Location: {{$info->requirment}}</p>
                                        <div class="meta meta-style2">
                                            <ul>
                                                <li>Full time</li>
                                                <button class="button-7" onclick="openPopup('{{ $info->id }}')">View Job</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Popup Model -->

                            @endforeach
                        </div>

                    </li>

                    @foreach ($categories as $info)
                    <li class="tab-content tab-content-{{ $loop->index + 2 }} typography">
                        <h1>{{$info->category}}</h1>
                        @foreach ($categoryJobs[$info->category] as $job)
                        <!-- Display job cards for the current category -->
                        <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="blog-grid">
                                <div class="blog-grid-img position-relative"><img alt="img" style="width:100%;height: 50vh;" src="jobimage/{{$job->image}}"></div>
                                <div class="blog-grid-text p-4">
                                    <h3 class="h5 mb-3">{{$job->title}}</h3>
                                    <p class="display-30">{{$job->requirment}}</p>
                                    <div class="meta meta-style2">
                                        <ul>
                                            <li>Full time</li>
                                            <button class="button-7" onclick="openPopup('{{ $job->id }}')">View Job</button>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                    </li>
                    @endforeach
                </ul>
            </div>
            <!--/ tabs -->
        </div>
    </div>
</section>
@foreach ($category as $info)
    <div id="popupModel{{ $info->id }}" class="popup-container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- Your popup content here -->
        <div class="popup-content">
            <h2>{{ $info->title }}</h2>
            <div>
                {{ $info->requirment }}
            </div>
            <h5 style="font-weight: bolder;">Job Description:</h5>
            <div class="description">
                {!! $info->description !!}
            </div>
            <br>
            <button class="close-button" onclick="closePopup('{{ $info->id }}')"></button>
            @if (Auth::check())
    <?php 
    $posts = Job::where('user_id', auth()->user()->id)->get();
    ?>
    @if ($posts->count() > 0)
        <form method="POST" action="{{ url('apliadjob') }}">
            @csrf <!-- Add the CSRF token if using Laravel -->
            <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
            <input type="hidden" name="jobid" value="{{ $info->id }}">
            <input type="hidden" name="title" value="{{ $info->title }}">
            <input type="hidden" name="requirment" value="{{ $info->requirment }}">
            <input type="hidden" name="category" value="{{ $info->category }}">
            <input type="hidden" name="description" value="{{ $info->description }}">
            <button type="submit" class="apply-button">Apply now</button>
        </form>
    @else
        <script>window.location.href = "{{ url('profile') }}";</script>
    @endif
@else
    <script>window.location.href = "{{ url('ouroffice') }}";</script>
@endif

        </div>
    </div>
@endforeach

<script>
    function openPopup(id) {
        var popup = document.getElementById("popupModel" + id);
        popup.style.display = "block";
    }

    function closePopup(id) {
        var popup = document.getElementById("popupModel" + id);
        popup.style.display = "none";
    }
</script>