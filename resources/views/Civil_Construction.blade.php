@include('layouts.header')
<link href="assets/css/bootstrap.css">
<link href="assets/js/javascriptfile1.js">
<link href="assets/js/jquaryfile.js">

<section class="page-header" style="margin-top:-10px;width: 100%;height: 50%;">
    <div class="page-header__bg" style="background-image: url(indus/civil.png);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Civil Construction</h2><!-- /.page-header__title -->
        <ul class="list-unstyled breadcrumb-one">
            <li><a href="index">Home</a></li>
            <li><span>Industries</span></li>
            <li><span>Civil Construction</span></li>
        </ul><!-- /.list-unstyled breadcrumb-one -->
    </div><!-- /.container -->
</section>
<!-- css -->
<style>
    .images-coloumn {
        margin-top: 20px;
        position: relative;
    }



    .paragraph {
        position: absolute;

        /* border: 2px solid red; */
        /* display: flex;
           justify-content: center; */

        top: 0;
        height: 0;
        padding-top: 30%;
        width: 95%;

        /* display: flex;
            justify-content: center;
            align-items: center; */
        font-weight: bold;
        font-size: 16px;
        padding-left: 40px;
        transition: all 0.7s;
        overflow: hidden;

    }

    .images-coloumn a {
        text-decoration: none;
        color: white;
    }


    .images-coloumn .civil_image {
        width: 100%;
        height: 300px;
    }




    .images-coloumn:hover .paragraph {
        /* width: 100%; */
        height: 100%;
        opacity: 1;
        /* border: 2px solid red; */
        /* top: 50%;
            left: 50%;
            transform: translateX(-50%,-50%); */
        background: #be0c10de;
    }


    .grid-container {
        display: grid;
        grid-template-columns: repeat(3, 40%);
        /* Three columns with equal width */
        grid-gap: 1px;
        /* Gap between grid items */
        justify-content: center;
        align-items: center;

    }

    .grid-item {
        background-color: #eaeaea;
        padding: 10px;
        text-align: center;

    }

    .our-projects {
        font-size: 45px;
        text-align: center;
        color: rgb(23, 49, 82);
        padding: 20px;
    }
</style>

<!-- end css -->
<style>
    .wp-block-buttons.is-content-justification-center.is-vertical {
        align-items: center
    }

    .wp-block-buttons.is-content-justification-right {
        justify-content: flex-end
    }

    .wp-block-buttons.is-content-justification-right.is-vertical {
        align-items: flex-end
    }

    .wp-block-buttons.is-content-justification-space-between {
        justify-content: space-between
    }

    .wp-block-buttons.aligncenter {
        text-align: center
    }

    .wp-block-buttons:not(.is-content-justification-space-between, .is-content-justification-right, .is-content-justification-left, .is-content-justification-center) .wp-block-button.aligncenter {
        margin-left: auto;
        margin-right: auto;
        width: 100%
    }

    .wp-block-buttons[style*=text-decoration] .wp-block-button,
    .wp-block-buttons[style*=text-decoration] .wp-block-button__link {
        text-decoration: inherit
    }

    .wp-block-buttons.has-custom-font-size .wp-block-button__link {
        font-size: inherit
    }

    .wp-block-button.aligncenter,
    .wp-block-calendar {
        text-align: center
    }

    .wp-block-calendar td,
    .wp-block-calendar th {
        border: 1px solid;
        padding: .25em
    }

    .wp-block-calendar th {
        font-weight: 400
    }

    .wp-block-calendar caption {
        background-color: inherit
    }

    .wp-block-calendar table {
        border-collapse: collapse;
        width: 100%
    }

    .wp-block-calendar table:where(:not(.has-text-color)) {
        color: #40464d
    }

    .wp-block-calendar table:where(:not(.has-text-color)) td,
    .wp-block-calendar table:where(:not(.has-text-color)) th {
        border-color: #ddd
    }

    .wp-block-calendar table.has-background th {
        background-color: inherit
    }

    .wp-block-calendar table.has-text-color th {
        color: inherit
    }

    :where(.wp-block-calendar table:not(.has-background) th) {
        background: #ddd
    }

    .wp-block-categories {
        box-sizing: border-box
    }

    .wp-block-categories.alignleft {
        margin-right: 2em
    }

    .wp-block-categories.alignright {
        margin-left: 2em
    }

    .wp-block-code {
        box-sizing: border-box
    }

    .wp-block-code code {
        display: block;
        font-family: inherit;
        overflow-wrap: break-word;
        white-space: pre-wrap
    }

    .wp-block-columns {
        align-items: normal !important;
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap !important;
        margin-bottom: 1.75em
    }



    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sup {
        top: -.5em
    }

    sub {
        bottom: -.25em
    }

    dl,
    menu,
    ol,
    ul {
        margin: 1em 0
    }

    dd {
        margin: 0 0 0 40px
    }

    menu,
    ol,
    ul {
        padding: 0 0 0 40px
    }

    nav ol,
    nav ul {
        list-style: none;
        list-style-image: none
    }

    img {
        border: 0;
        -ms-interpolation-mode: bicubic
    }

    svg:not(:root) {
        overflow: hidden
    }

    figure,
    form {
        margin: 0
    }

    fieldset {
        border: 1px solid silver;
        margin: 0 2px;
        padding: .35em .625em .75em
    }

    legend {
        border: 0;
        padding: 0;
        white-space: normal;
        *margin-left: -7px;
    }

    button,
    input,
    select,
    textarea {
        font-size: 100%;
        margin: 0;
        vertical-align: baseline;
        *vertical-align: middle;
    }

    button,
    input {
        line-height: normal
    }

    button,
    select {
        text-transform: none
    }

    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {

        cursor: pointer;
        *overflow: visible;
    }

    button[disabled],
    html input[disabled] {
        cursor: default
    }

    input[type=checkbox],
    input[type=radio] {
        box-sizing: border-box;
        padding: 0;
        *height: 13px;
        *width: 13px;
    }

    input[type=search] {

        box-sizing: border-box
    }

    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    textarea {
        overflow: auto;
        vertical-align: top
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    x-object-fit {
        position: relative !important;
        display: inline-block !important
    }

    x-object-fit>.x-object-fit-taller,
    x-object-fit>.x-object-fit-wider {
        position: absolute !important;
        left: -100% !important;
        right: -100% !important;
        top: -100% !important;
        bottom: -100% !important;
        margin: auto !important
    }

    .x-object-fit-none>.x-object-fit-taller,
    .x-object-fit-none>.x-object-fit-wider {
        width: auto !important;
        height: auto !important
    }

    .x-object-fit-fill>.x-object-fit-taller,
    .x-object-fit-fill>.x-object-fit-wider {
        width: 100% !important;
        height: 100% !important
    }

    .x-object-fit-contain>.x-object-fit-taller {
        width: auto !important;
        height: 100% !important
    }

    .x-object-fit-contain>.x-object-fit-wider {
        width: 100% !important;
        height: auto !important
    }

    .x-object-fit-cover>.x-object-fit-taller,
    .x-object-fit-cover>.x-object-fit-wider {
        max-width: none !important;
        max-height: none !important
    }

    .x-object-fit-cover>.x-object-fit-taller {
        width: 100% !important;
        height: auto !important;
        max-width: none !important
    }

    .x-object-fit-cover>.x-object-fit-wider {
        width: auto !important;
        height: 100% !important;
        max-width: none !important
    }

    .x-object-position-top>.x-object-fit-taller,
    .x-object-position-top>.x-object-fit-wider {
        top: 0 !important;
        bottom: auto !important
    }

    .x-object-position-right>.x-object-fit-taller,
    .x-object-position-right>.x-object-fit-wider {
        left: auto !important;
        right: 0 !important
    }

    .x-object-position-bottom>.x-object-fit-taller,
    .x-object-position-bottom>.x-object-fit-wider {
        top: auto !important;
        bottom: 0 !important
    }

    .x-object-position-left>.x-object-fit-taller,
    .x-object-position-left>.x-object-fit-wider {
        left: 0 !important;
        right: auto !important
    }

    .moz-background-picture {
        display: inline-block;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat
    }

    .moz-background-picture-default {
        display: inline-block;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat;
        background-image: url(//www.ccc.net/wp-content/themes/ccc001/assets/css/../img/no-thumbnail-1350_540.jpg)
    }

    .clearfix {
        *zoom: 1;
    }

    .clearfix:after,
    .clearfix:before {
        content: " ";
        display: table
    }

    .clearfix:after {
        clear: both
    }

    .nocollapse:after,
    .nocollapse:before {
        content: "\00a0";
        display: block;
        overflow: hidden;
        height: 0
    }

    .visuallyhidden,
    .visuallyhidden--no-js {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .no-js .visuallyhidden--no-js {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto
    }

    .visuallyhidden--focusable {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .visuallyhidden--focusable:active,
    .visuallyhidden--focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto
    }

    .grid {
        list-style: none;
        margin: 0;
        padding: 0;
        margin-left: -20px;
        letter-spacing: -.31em
    }

    .grid,
    .opera:-o-prefocus {
        word-spacing: -.43em
    }

    .grid__item {
        display: inline-block;
        padding-left: 20px;
        vertical-align: top;
        width: 100%;
        box-sizing: border-box;
        letter-spacing: normal;
        word-spacing: normal
    }

    .grid--rev {
        direction: rtl;
        text-align: left
    }

    .grid--rev>.grid__item {
        direction: ltr;
        text-align: left
    }

    .grid--full {
        margin-left: 0
    }

    .grid--full>.grid__item {
        padding-left: 0
    }

    .grid--right {
        text-align: right
    }

    .grid--right>.grid__item {
        text-align: left
    }

    .grid--center {
        text-align: center
    }

    .grid--center>.grid__item {
        text-align: left
    }

    .grid--middle>.grid__item {
        vertical-align: middle
    }

    .grid--bottom>.grid__item {
        vertical-align: bottom
    }

    .grid--narrow {
        margin-left: -10px
    }

    .grid--narrow>.grid__item {
        padding-left: 10px
    }

    .grid--wide {
        margin-left: -40px
    }

    .grid--wide>.grid__item {
        padding-left: 40px
    }

    .one-whole {
        width: 100%
    }

    .five-tenths,
    .four-eighths,
    .one-half,
    .six-twelfths,
    .three-sixths,
    .two-quarters {
        width: 50%
    }

    .four-twelfths,
    .one-third,
    .two-sixths {
        width: 33.333%
    }

    .eight-twelfths,
    .four-sixths,
    .two-thirds {
        width: 66.666%
    }

    @media only screen and (min-width: 400px) {
        .mob--one-whole {
            width: 100%
        }

        .mob--five-tenths,
        .mob--four-eighths,
        .mob--one-half,
        .mob--six-twelfths,
        .mob--three-sixths,
        .mob--two-quarters {
            width: 50%
        }

        .mob--four-twelfths,
        .mob--one-third,
        .mob--two-sixths {
            width: 33.333%
        }

        .mob--eight-twelfths,
        .mob--four-sixths,
        .mob--two-thirds {
            width: 66.666%
        }

        .mob--one-quarter,
        .mob--three-twelfths,
        .mob--two-eighths {
            width: 25%
        }

        .mob--nine-twelfths,
        .mob--six-eighths,
        .mob--three-quarters {
            width: 75%
        }

        .mob--one-fifth,
        .mob--two-tenths {
            width: 20%
        }

        .mob--four-tenths,
        .mob--two-fifths {
            width: 40%
        }

        .mob--six-tenths,
        .mob--three-fifths {
            width: 60%
        }

        .mob--eight-tenths,
        .mob--four-fifths {
            width: 80%
        }

        .mob--one-sixth,
        .mob--two-twelfths {
            width: 16.666%
        }

        .mob--five-sixths,
        .mob--ten-twelfths {
            width: 83.333%
        }

        .mob--one-eighth {
            width: 12.5%
        }

        .mob--three-eighths {
            width: 37.5%
        }

        .mob--five-eighths {
            width: 62.5%
        }

        .mob--seven-eighths {
            width: 87.5%
        }

        .mob--one-tenth {
            width: 10%
        }

        .mob--three-tenths {
            width: 30%
        }

        .mob--seven-tenths {
            width: 70%
        }

        .mob--nine-tenths {
            width: 90%
        }

        .mob--one-twelfth {
            width: 8.333%
        }

        .mob--five-twelfths {
            width: 41.666%
        }

        .mob--seven-twelfths {
            width: 58.333%
        }

        .mob--eleven-twelfths {
            width: 91.666%
        }
    }

    @media only screen and (min-width: 768px) {
        .tab--one-whole {
            width: 100%
        }

        .tab--five-tenths,
        .tab--four-eighths,
        .tab--one-half,
        .tab--six-twelfths,
        .tab--three-sixths,
        .tab--two-quarters {
            width: 50%
        }

        .tab--four-twelfths,
        .tab--one-third,
        .tab--two-sixths {
            width: 33.333%
        }

        .tab--eight-twelfths,
        .tab--four-sixths,
        .tab--two-thirds {
            width: 66.666%
        }

        .tab--one-quarter,
        .tab--three-twelfths,
        .tab--two-eighths {
            width: 25%
        }

        .tab--nine-twelfths,
        .tab--six-eighths,
        .tab--three-quarters {
            width: 75%
        }

        .tab--one-fifth,
        .tab--two-tenths {
            width: 20%
        }

        .tab--four-tenths,
        .tab--two-fifths {
            width: 40%
        }

        .tab--six-tenths,
        .tab--three-fifths {
            width: 60%
        }

        .tab--eight-tenths,
        .tab--four-fifths {
            width: 80%
        }

        .tab--one-sixth,
        .tab--two-twelfths {
            width: 16.666%
        }

        .tab--five-sixths,
        .tab--ten-twelfths {
            width: 83.333%
        }

        .tab--one-eighth {
            width: 12.5%
        }

        .tab--three-eighths {
            width: 37.5%
        }

        .tab--five-eighths {
            width: 62.5%
        }

        .tab--seven-eighths {
            width: 87.5%
        }

        .tab--one-tenth {
            width: 10%
        }

        .tab--three-tenths {
            width: 30%
        }

        .tab--seven-tenths {
            width: 70%
        }

        .tab--nine-tenths {
            width: 90%
        }

        .tab--one-twelfth {
            width: 8.333%
        }

        .tab--five-twelfths {
            width: 41.666%
        }

        .tab--seven-twelfths {
            width: 58.333%
        }

        .tab--eleven-twelfths {
            width: 91.666%
        }
    }

    @media only screen and (min-width: 1024px) {
        .lap--one-whole {
            width: 100%
        }

        .lap--five-tenths,
        .lap--four-eighths,
        .lap--one-half,
        .lap--six-twelfths,
        .lap--three-sixths,
        .lap--two-quarters {
            width: 50%
        }

        .lap--four-twelfths,
        .lap--one-third,
        .lap--two-sixths {
            width: 33.333%
        }

        .lap--eight-twelfths,
        .lap--four-sixths,
        .lap--two-thirds {
            width: 66.666%
        }

        .lap--one-quarter,
        .lap--three-twelfths,
        .lap--two-eighths {
            width: 25%
        }

        .lap--nine-twelfths,
        .lap--six-eighths,
        .lap--three-quarters {
            width: 75%
        }

        .lap--one-fifth,
        .lap--two-tenths {
            width: 20%
        }

        .lap--four-tenths,
        .lap--two-fifths {
            width: 40%
        }

        .lap--six-tenths,
        .lap--three-fifths {
            width: 60%
        }

        .lap--eight-tenths,
        .lap--four-fifths {
            width: 80%
        }

        .lap--one-sixth,
        .lap--two-twelfths {
            width: 16.666%
        }

        .lap--five-sixths,
        .lap--ten-twelfths {
            width: 83.333%
        }

        .lap--one-eighth {
            width: 12.5%
        }

        .lap--three-eighths {
            width: 37.5%
        }

        .lap--five-eighths {
            width: 62.5%
        }

        .lap--seven-eighths {
            width: 87.5%
        }

        .lap--one-tenth {
            width: 10%
        }

        .lap--three-tenths {
            width: 30%
        }

        .lap--seven-tenths {
            width: 70%
        }

        .lap--nine-tenths {
            width: 90%
        }

        .lap--one-twelfth {
            width: 8.333%
        }

        .lap--five-twelfths {
            width: 41.666%
        }

        .lap--seven-twelfths {
            width: 58.333%
        }

        .lap--eleven-twelfths {
            width: 91.666%
        }
    }


    @media (min-width: 1024px) {
        .projects__map__full {
            right: 80px
        }
    }

    @media (min-width: 1280px) {
        .projects__map__full {
            bottom: 20px;
            right: 5px
        }
    }

    .projects__map__popup {
        position: absolute;
        top: 80px;
        right: 20px;
        left: 20px;
        background-color: #fff;
        color: #272727;
        width: auto;
        z-index: 2;
        height: calc(100vh - 300px)
    }

    @media (min-width: 768px) {
        .projects__map__popup {
            position: absolute;
            top: 120px;
            right: 0;
            left: auto;
            width: 340px;
            height: calc(100vh - 265px)
        }
    }

    .projects__map__popup__inner {
        width: 100%;
        height: 100%
    }

    .projects__map__popup__content__wrapper {
        padding: 20px
    }

    .projects__map__popup__close {
        position: absolute;
        top: 25px;
        right: 20px;
        cursor: pointer
    }

    .projects__map__popup__close:hover svg path {
        stroke: #272727
    }

    .projects__map__popup__close svg {
        width: 20px;
        height: 20px
    }

    .projects__map__popup__close svg path {
        stroke: #dc1b21;
        transition: stroke .4s ease
    }

    .projects__map__popup__title {
        position: relative;
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 20px;
        line-height: 1.45em;
        font-weight: 400;
        color: #2b2b2b;
        padding-bottom: 12px;
        padding-right: 25px
    }

    .projects__map__popup__title:after {
        content: "";
        background-color: #272727;
        width: 30px;
        height: 1px;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .projects__map__popup__title a {
        color: #2b2b2b
    }

    .projects__map__popup__title a:hover {
        color: #dc1b21
    }

    .projects__map__popup__country {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #878787;
        padding: 10px 0 15px;
        letter-spacing: .03em
    }

    .projects__map__popup__bg {
        position: relative;
        width: 100%;
        height: 180px;
        margin-bottom: 15px
    }

    .projects__map__popup__bg__inner {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat
    }

    .projects__map__popup__item {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.75em;
        color: #272727;
        padding: 3px 0
    }

    .projects__map__popup__item span {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif
    }

    .projects__map__popup__link {
        padding-top: 20px
    }

    .projects__header {
        position: relative;
        background-color: #fff;
        padding: 0 20px 0 80px;
        margin-bottom: 40px;
        height: 200px;
        z-index: 2
    }

    @media (min-width: 768px) {
        .projects__header {
            padding: 0 40px 0 100px;
            height: 120px
        }
    }

    .map-view .projects__header {
        position: relative;
        bottom: 0;
        margin: -200px auto 0
    }

    @media (min-width: 768px) {
        .map-view .projects__header {
            margin: -122px auto 0
        }
    }

    .projects__header__title {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        line-height: 1em;
        letter-spacing: .03em;
        color: #000;
        padding: 20px 10px 26px 0;
        position: relative;
        top: 5px;
        display: none
    }

    @media (min-width: 768px) {
        .projects__header__title {
            display: inline-block
        }
    }

    .projects__header__form {
        width: 100%;
        height: 100%
    }

    .projects__header__filters__wrapper {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: left;
        -ms-flex-align: left;
        align-items: left;
        height: 100%;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .projects__header__filters {
        width: 100%
    }

    .projects__header__filter {
        display: inline-block;
        padding-left: 20px;
        padding-bottom: 5px;
        width: 100%
    }

    .projects__header__filter:last-child {
        padding-bottom: 0
    }

    @media (min-width: 768px) {
        .projects__header__filter {
            width: 22%;
            padding-bottom: 0
        }
    }

    .projects__header__filter select {
        width: 100%
    }

    .projects__header__views {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        background-color: #2b2b2b
    }

    .projects__header__map-view {
        text-align: center;
        display: block;
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 10px;
        line-height: 1em;
        letter-spacing: .03em;
        background-color: #dc1b21;
        padding: 9px 10px;
        border-right: 2px solid #2b2b2b;
        border-bottom: 1px solid #2b2b2b;
        cursor: pointer;
        transition: opacity .4s ease
    }

    .list-view .projects__header__map-view {
        opacity: .4;
        transition: opacity .4s ease
    }

    .map-view .projects__header__map-view {
        opacity: 1;
        transition: opacity 0s ease
    }

    .projects__header__map-view svg {
        width: 20px;
        display: block;
        height: 29px;
        margin: 0 auto 4px
    }

    .projects__header__map-view svg path {
        fill: #fff
    }

    .projects__header__list-view {
        text-align: center;
        display: block;
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 10px;
        line-height: 1em;
        letter-spacing: .03em;
        background-color: #dc1b21;
        padding: 9px 10px;
        border-right: 2px solid #272727;
        border-top: 1px solid #272727;
        cursor: pointer;
        transition: opacity .4s ease
    }

    .list-view .projects__header__list-view {
        opacity: 1;
        transition: opacity 0s ease
    }

    .map-view .projects__header__list-view {
        opacity: .4;
        transition: opacity .4s ease
    }

    .projects__header__list-view svg {
        width: 25px;
        display: block;
        height: 25px;
        margin: 0 auto 4px
    }

    .projects__header__list-view svg circle,
    .projects__header__list-view svg path {
        fill: #fff
    }

    .projects__header__clear {
        display: block;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        color: #000;
        letter-spacing: .03em;
        transition: color .4s ease;
        cursor: pointer;
        padding-top: 5px;
        padding-left: 20px
    }

    @media (min-width: 768px) {
        .projects__header__clear {
            padding-left: 140px
        }
    }

    .projects__header__clear:hover {
        color: #dc1b21
    }

    .projects__header__clear:hover svg path {
        stroke: #dc1b21
    }

    .projects__header__clear svg {
        width: 20px;
        height: 20px;
        position: relative;
        top: 4px;
        left: 8px
    }

    .projects__header__clear svg path {
        transition: stroke .4s ease;
        stroke: #000
    }

    .projects__loader {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 18px;
        letter-spacing: .1em;
        color: hsla(0, 0%, 100%, .6);
        text-align: center;
        height: calc(100vh - 150px);
        position: relative
    }

    .projects__loader__content {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .projects__loader__content .loader {
        font-size: 10px;
        position: relative
    }

    .projects__loader__content__text {
        display: none;
        position: relative;
        padding-top: 20px
    }

    .projects__loading {
        text-align: center;
        padding: 100px 0
    }

    .projects__list {
        width: 100%;
        position: relative;
        padding: 0 15px;
        z-index: 2
    }

    @media (min-width: 768px) {
        .projects__list {
            padding: 0
        }
    }

    .projects.list-view .projects__inner {
        padding: 80px 0 20px
    }

    @media (min-width: 768px) {
        .projects.list-view .projects__inner {
            padding: 100px 0 40px
        }
    }

    @media (min-width: 1024px) {
        .projects.list-view .projects__inner {
            padding: 160px 0 120px
        }
    }

    .projects__nopost {
        text-align: center;
        padding: 100px 0
    }

    .project__item,
    .project__items {
        width: 100%;
        position: relative
    }

    .project__item {
        height: 380px;
        overflow: hidden
    }

    @media (min-width: 768px) {
        .project__item {
            height: 480px
        }
    }

    @media (min-width: 768px) {
        .project__item:hover .project__item__hover {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            transition: -webkit-transform .8s ease .6s;
            transition: transform .8s ease .6s;
            transition: transform .8s ease .6s, -webkit-transform .8s ease .6s
        }
    }

    .project__item__hover {
        position: absolute;
        -webkit-transform: translateX(-110%);
        -ms-transform: translateX(-110%);
        transform: translateX(-110%);
        background-color: #dc1b21;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        transition: -webkit-transform .8s ease;
        transition: transform .8s ease;
        transition: transform .8s ease, -webkit-transform .8s ease
    }

    .project__item__hover__inner {
        position: relative;
        width: 100%;
        padding: 30px;
        color: #fff
    }

    .project__item__hover__title {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 20px;
        line-height: 1.35em;
        font-weight: 400;
        padding-bottom: 20px
    }

    .project__item__hover__item {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.3em;
        font-weight: 400;
        padding: 8px 0
    }

    .project__item__hover__item span {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif
    }

    .project__item__inner,
    .project__item__link {
        width: 100%;
        height: 100%
    }

    .project__item__link {
        position: absolute;
        z-index: 1
    }

    .project__item__content {
        position: relative;
        width: 100%;
        height: 100%;
        padding: 30px;
        z-index: 0
    }

    .project__item__content:after {
        content: "";
        position: absolute;
        background-color: rgba(0, 0, 0, .4);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: -1
    }

    .project__item__bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat
    }

    .project__item__title {
        position: relative;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 20px;
        line-height: 1.45em;
        color: #fff;
        padding-bottom: 22px;
        margin: 0;
        font-weight: 400
    }

    .project__item__title:after {
        content: "";
        background-color: #fff;
        width: 30px;
        height: 2px;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .project__item__location {
        font-size: 14px;
        letter-spacing: .03em;
        padding-top: 20px
    }

    .project__item__industry,
    .project__item__location {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        line-height: 1em;
        color: #fff
    }

    .project__item__industry {
        font-size: 17px;
        letter-spacing: .1em;
        position: absolute;
        bottom: 20px;
        left: 30px;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left
    }

    .projects__more {
        padding: 40px 0 0;
        text-align: center
    }

    .select2-container--above {
        width: 100% !important
    }

    .select2-container--default .select2-selection--single {
        background-color: #000;
        border: none;
        border-radius: 0;
        height: 100%
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 15px;
        letter-spacing: .05em;
        color: #fff;
        padding: 10px 20px 10px 10px
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        width: 27px;
        height: 100%;
        top: 0;
        right: 5px;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        background-size: 17px;
        background-image: url(//www.ccc.net/wp-content/themes/ccc001/assets/css/../svg/arrow-white.svg);
        background-repeat: no-repeat;
        background-position: 50%
    }

    @media (min-width: 768px) {
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            background-size: 30px
        }
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        display: none
    }

    .select2-dropdown {
        background-color: #000;
        border: none;
        z-index: 9
    }

    .select2-results__option {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 15px;
        letter-spacing: .05em;
        color: #fff;
        padding: 5px 10px
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #878787
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #dc1b21
    }

    [v-cloak] {
        display: none
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity .5s
    }

    .fade-enter,
    .fade-leave-to {
        opacity: 0
    }

    .list-enter-active,
    .list-leave-active {
        transition: opacity .5s
    }

    .list-enter,
    .list-leave-to {
        opacity: 0
    }

    .project-main-content {
        width: 100%;
        position: relative;
        padding: 20px 15px
    }

    @media (min-width: 400px) {
        .project-main-content {
            padding: 40px 15px
        }
    }

    @media (min-width: 768px) {
        .project-main-content {
            padding: 60px 0 0
        }
    }

    .project-main-content__left {
        padding-right: 0;
        padding-bottom: 0;
        padding-top: 40px;
        text-align: justify
    }

    @media (min-width: 768px) {
        .project-main-content__left {
            padding-bottom: 80px;
            padding-right: 40px;
            padding-top: 0
        }
    }

    .project-main-content__left__title {
        color: #272727;
        text-align: left;
        margin: 0
    }

    .project-main-content__left__subtitle {
        padding: 10px 0;
        text-align: left;
        margin: 0
    }

    .project-main-content__left__text {
        color: #272727;
        font-size: 17px
    }

    .project-main-content__box {
        position: relative;
        width: 100%;
        background-color: #fff;
        padding: 20px;
        color: #272727;
        top: 0;
        right: 0;
        margin-bottom: 0;
        z-index: 2
    }

    @media (min-width: 768px) {
        .project-main-content__box {
            padding: 40px;
            top: -140px;
            margin-bottom: -140px
        }
    }

    .project-main-content__box__item {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #2b2b2b;
        padding-bottom: 15px;
        font-weight: 400
    }

    @media (min-width: 768px) {
        .project-main-content__box__item {
            padding-bottom: 40px;
            font-size: 18px
        }
    }

    .project-main-content__box__item:last-child {
        padding-bottom: 0
    }

    .project-main-content__box__item span {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #878787;
        display: block
    }

    .project-quote-slider {
        position: relative;
        width: 100%;
        padding: 0 15px 20px
    }

    @media (min-width: 768px) {
        .project-quote-slider {
            padding: 0
        }
    }

    .project-quote-slider__quote {
        text-align: center;
        max-width: 320px;
        margin: 0 auto;
        padding-bottom: 40px
    }

    @media (min-width: 768px) {
        .project-quote-slider__quote {
            margin: 0;
            padding-bottom: 0
        }
    }

    .project-quote-slider__quote__icon {
        text-align: center;
        padding-bottom: 20px
    }

    .project-quote-slider__quote__icon--last {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
        padding-bottom: 20px
    }

    .project-quote-slider__quote__text {
        color: #2b2b2b;
        text-align: center;
        line-height: 1.6em
    }

    @media (min-width: 768px) {
        .project-quote-slider__quote__text {
            font-size: 18px
        }
    }

    @media (min-width: 1024px) {
        .project-quote-slider__quote__text {
            font-size: 30px
        }
    }

    .project-quote-slider__quote__said {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        color: #878787;
        font-weight: 400;
        padding-top: 20px
    }

    .vb>.vb-dragger {
        z-index: 5;
        width: 12px;
        right: 0
    }

    .vb>.vb-dragger>.vb-dragger-styler {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: rotate3d(0, 0, 0, 0);
        transform: rotate3d(0, 0, 0, 0);
        transition: background-color .1s ease-out, margin .1s ease-out, height .1s ease-out;
        background-color: rgba(39, 39, 39, .1);
        margin: 5px 5px 5px 0;
        border-radius: 20px;
        height: calc(100% - 10px);
        display: block
    }

    .vb.vb-scrolling-phantom>.vb-dragger>.vb-dragger-styler {
        background-color: rgba(39, 39, 39, .3)
    }

    .vb.vb-dragging>.vb-dragger>.vb-dragger-styler,
    .vb>.vb-dragger:hover>.vb-dragger-styler {
        background-color: rgba(39, 39, 39, .5);
        margin: 0;
        height: 100%
    }

    .vb.vb-dragging-phantom>.vb-dragger>.vb-dragger-styler {
        background-color: rgba(39, 39, 39, .5)
    }

    .press-overview,
    .press-overview__item {
        width: 100%;
        position: relative
    }

    .press-overview__item {
        margin-bottom: 0;
        height: 100%;
        z-index: 2
    }

    @media (min-width: 400px) {
        .press-overview__item {
            margin-bottom: 220px
        }
    }

    @media (min-width: 1024px) {
        .press-overview__item--odd {
            margin-left: 8.33%
        }
    }

    .press-overview__item__inner {
        width: 100%;
        height: 100%
    }

    .press-overview__item__bg {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 250px
    }

    @media (min-width: 400px) {
        .press-overview__item__bg {
            position: absolute;
            width: 300px
        }
    }

    @media (min-width: 768px) {
        .press-overview__item__bg {
            width: 60%
        }
    }

    .press-overview__item__box {
        background-color: #fff;
        padding: 30px;
        position: relative;
        width: 100%;
        top: -50px;
        left: 20px;
        z-index: 2;
        max-width: calc(100% - 40px);
        opacity: .85
    }

    @media (min-width: 400px) {
        .press-overview__item__box {
            width: 100%;
            top: 150px;
            left: 150px;
            z-index: 2;
            max-width: calc(100% - 165px)
        }
    }

    @media (min-width: 768px) {
        .press-overview__item__box {
            width: 60%;
            max-width: calc(100% - 150px)
        }
    }

    .press-overview__item__box__info {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        font-weight: 400;
        color: #878787
    }

    .press-overview__item__box__title a {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #272727;
        padding-bottom: 40px
    }

    .press-overview__item__box__title a:hover {
        color: #dc1b21
    }

    @media (min-width: 360px) {
        .press-overview__item__box__title {
            margin-bottom: 35px
        }
    }

    .press-overview__item__box__link {
        padding-top: 20px
    }

    .bulletins-overview,
    .bulletins-overview__item {
        width: 100%;
        position: relative
    }

    .bulletins-overview__item {
        margin-bottom: 80px;
        height: 100%;
        float: left;
        z-index: 2;
        padding-right: 0
    }

    @media (min-width: 400px) {
        .bulletins-overview__item {
            margin-bottom: 120px
        }
    }

    @media (min-width: 1024px) {
        .bulletins-overview__item {
            padding-right: 8.33%
        }
    }

    @media (min-width: 1024px) {
        .bulletins-overview__item--odd {
            margin-left: 8.33%;
            padding-right: 0
        }
    }

    .bulletins-overview__item__inner {
        width: 100%;
        height: 100%
    }

    .bulletins-overview__item__bg {
        position: relative;
        float: left
    }

    .bulletins-overview__item__box {
        background-color: #fff;
        padding: 15px;
        position: relative;
        width: 100%;
        top: 40px;
        max-width: calc(100% - 160px);
        float: left;
        min-height: 225px
    }

    @media (min-width: 400px) {
        .bulletins-overview__item__box {
            top: 40px;
            padding: 30px
        }
    }

    .bulletins-overview__item__box__info {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        font-weight: 400;
        color: #878787
    }

    .bulletins-overview__item__box__title a {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #272727;
        padding-bottom: 40px
    }

    .bulletins-overview__item__box__title a:hover {
        color: #dc1b21
    }

    @media (min-width: 360px) {
        .bulletins-overview__item__box__title {
            margin-bottom: 35px
        }
    }

    .bulletins-overview__item__box__link {
        position: absolute;
        bottom: 20px
    }

    @media (max-width: 399px) {
        .bulletins-overview__item__box .btn__arrow--down .btn__icon {
            display: none
        }
    }

    .videos-overview {
        width: 100%;
        position: relative;
        padding: 20px 15px;
        overflow: hidden
    }

    @media (min-width: 400px) {
        .videos-overview {
            padding: 40px 15px
        }
    }

    @media (min-width: 768px) {
        .videos-overview {
            padding: 60px 0 120px
        }
    }

    .videos-overview__title {
        color: #272727
    }

    .videos__filters {
        display: none;
        padding: 0 0 20px;
        position: relative;
        z-index: 2
    }

    @media (min-width: 400px) {
        .videos__filters {
            min-width: 170px;
            padding: 0 0 40px
        }
    }

    @media (min-width: 768px) {
        .videos__filters {
            display: inline-block;
            min-width: 200px
        }
    }

    .videos__filters--awards {
        padding: 0 0 40px
    }

    .videos__filters--mob {
        width: 100%;
        display: block;
        padding-bottom: 20px
    }

    @media (min-width: 400px) {
        .videos__filters--mob {
            min-width: 170px;
            width: auto;
            display: inline-block
        }
    }

    @media (min-width: 768px) {
        .videos__filters--mob {
            display: none;
            min-width: 200px
        }
    }

    .videos__filters--years {
        display: block;
        width: 100%;
        text-align: left
    }

    @media (min-width: 400px) {
        .videos__filters--years {
            display: block;
            float: right;
            min-width: 170px;
            width: auto;
            text-align: left
        }
    }

    @media (min-width: 768px) {
        .videos__filters--years {
            min-width: 200px;
            padding-top: 0;
            position: absolute;
            top: 0;
            right: 0
        }
    }

    .videos__filters--years--side {
        position: relative
    }

    .videos__filters__select {
        width: 100%
    }

    @media (min-width: 768px) {
        .videos__filters__select {
            min-width: 180px
        }
    }

    .videos__filters__select--years {
        width: 100%
    }

    @media (min-width: 768px) {
        .videos__filters__select--years {
            min-width: 180px
        }
    }

    .videos__filters__select .select2-container {
        min-width: 200px
    }

    .videos__filters__item {
        display: inline-block;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 20px;
        color: #272727;
        font-weight: 400;
        padding: 25px;
        cursor: pointer;
        transition: background-color .4s ease, color .4s ease
    }

    .videos__filters__item.active,
    .videos__filters__item:hover {
        background-color: #dc1b21;
        color: #fff
    }

    .video__item {
        position: relative;
        padding-bottom: 40px;
        z-index: 2
    }

    @media (min-width: 768px) {
        .video__item {
            padding-right: 10px;
            padding-left: 10px;
            padding-bottom: 20px
        }
    }

    .video__item--odd {
        padding-top: 0
    }

    @media (min-width: 768px) {
        .video__item--odd {
            padding-right: 10px;
            padding-left: 10px;
            padding-top: 60px
        }
    }

    .video__item__inner {
        position: relative
    }

    .video__item__link {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 1
    }

    .video__item__link:hover span svg path:first-child {
        opacity: .4
    }

    .video__item__link span {
        left: 50%;
        top: 40%;
        position: absolute;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .video__item__link span svg path {
        transition: opacity .4s ease
    }

    .video__item__bg {
        padding-bottom: 10px
    }

    .video__item__bg img {
        width: 100%;
        height: auto
    }

    .video__item__category {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #878787;
        font-weight: 400;
        padding-bottom: 5px
    }

    .video__item__title {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 18px;
        color: #272727;
        font-weight: 400
    }

    .video__item__date {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        line-height: 1em;
        padding: 0 0 5px;
        color: #878787
    }

    @media (min-width: 1024px) {
        .video__item__date {
            padding: 0 0 5px
        }
    }

    .offices-contact {
        width: 100%;
        position: relative;
        padding: 40px 15px 60px;
        color: #272727;
        background-color: #fff
    }

    @media (min-width: 768px) {
        .offices-contact {
            padding: 60px 0 80px
        }
    }

    .offices {
        width: 100%;
        position: relative;
        padding: 0 0 40px
    }

    @media (min-width: 768px) {
        .offices {
            padding: 0 40px 0 0
        }
    }

    .offices__section-title {
        color: #878787;
        padding: 0 0 20px;
        margin: 0;
        opacity: 1
    }

    .offices__title {
        color: #272727;
        margin: 0;
        padding-bottom: 10px
    }

    .offices__text {
        font-size: 17px
    }

    .catalogue {
        padding: 15px 0 0
    }

    .catalogue__filter {
        padding: 0 0 40px;
        text-align: center
    }

    @media (min-width: 768px) {
        .catalogue__filter {
            display: inline-block;
            text-align: left
        }
    }

    .catalogue__filter__item {
        display: inline-block;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #272727;
        font-weight: 400;
        padding: 15px 10px;
        cursor: pointer;
        background-color: #efefef;
        margin-left: -2px;
        transition: all .4s ease
    }

    @media (min-width: 400px) {
        .catalogue__filter__item {
            font-size: 16px
        }
    }

    @media (min-width: 768px) {
        .catalogue__filter__item {
            padding: 20px 15px;
            font-size: 20px
        }
    }

    .catalogue__filter__item:hover {
        background-color: #272727;
        color: #fff
    }

    .catalogue__filter__item.active {
        background-color: #dc1b21;
        color: #fff
    }

    .offices__by-letter {
        display: none;
        position: relative;
        padding-left: 40px
    }

    @media (min-width: 400px) {
        .offices__by-letter {
            padding-left: 60px
        }
    }

    @media (min-width: 768px) {
        .offices__by-letter {
            padding-left: 40px
        }
    }

    @media (min-width: 1024px) {
        .offices__by-letter {
            padding-left: 100px
        }
    }

    .catalogue__items.enable .offices__by-letter {
        display: block
    }

    .offices__active-letter {
        position: absolute;
        top: 0;
        left: 0;
        font-family: stobisans_regularregular, Calibri, Helvetica, Arial, sans-serif;
        font-size: 25px;
        color: #dc1b21;
        border-bottom: 1px solid #dc1b21;
        padding-bottom: 2px
    }

    .office {
        padding-bottom: 20px;
        font-size: 15px
    }

    .office,
    .office a {
        color: #272727
    }

    .office a:hover {
        color: #dc1b21
    }

    .office__country {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #dc1b21
    }

    .office__address {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    .office__address a {
        color: #272727
    }

    .office__address a:hover {
        color: #dc1b21
    }

    .office__address p {
        margin: 0
    }

    .office__address span.office__address__icon {
        margin-right: 8px;
        position: relative;
        top: 2px
    }

    .office__address svg {
        width: 14px;
        height: 20px
    }

    .office__address svg path {
        fill: #dc1b21
    }

    .office__fax span,
    .office__telephones span {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        margin-right: 7px
    }

    .contact-form {
        background-color: #f4f4f4;
        padding: 20px;
        overflow: hidden
    }

    @media (min-width: 400px) {
        .contact-form {
            padding: 40px
        }
    }

    @media (min-width: 768px) {
        .contact-form {
            padding: 40px;
            margin-top: -140px
        }
    }

    @media (min-width: 1280px) {
        .contact-form {
            padding: 60px
        }
    }

    .contact-form__title {
        margin: 0;
        padding-bottom: 20px
    }

    .contact-form__item {
        position: relative;
        margin-bottom: 30px
    }

    .contact-form__item label {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 13px;
        color: #878787;
        display: block;
        text-transform: uppercase
    }

    .contact-form__item input,
    .contact-form__item textarea {
        background-color: transparent;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        color: #272727;
        border: none;
        position: relative;
        width: 100%;
        text-align: left;
        outline: none;
        padding: 5px 20px 5px 0;
        border-bottom: 1px solid silver;
        display: block
    }

    @media (min-width: 768px) {

        .contact-form__item input,
        .contact-form__item textarea {
            font-size: 16px
        }
    }

    .contact-form__item input:focus::-webkit-input-placeholder,
    .contact-form__item textarea:focus::-webkit-input-placeholder {
        color: #272727;
        opacity: 0
    }

    .contact-form__item input:focus::-moz-placeholder,
    .contact-form__item textarea:focus::-moz-placeholder {
        color: #272727;
        opacity: 0
    }

    .contact-form__item input:focus:-ms-input-placeholder,
    .contact-form__item textarea:focus:-ms-input-placeholder {
        color: #272727;
        opacity: 0
    }

    .contact-form__item input:focus:-moz-placeholder,
    .contact-form__item textarea:focus:-moz-placeholder {
        color: #272727;
        opacity: 0
    }

    .contact-form__item input::-webkit-input-placeholder,
    .contact-form__item textarea::-webkit-input-placeholder {
        color: #272727;
        opacity: 1;
        transition: opacity .4s ease
    }

    .contact-form__item input::-moz-placeholder,
    .contact-form__item textarea::-moz-placeholder {
        color: #272727;
        opacity: 1;
        transition: opacity .4s ease
    }

    .contact-form__item input:-ms-input-placeholder,
    .contact-form__item textarea:-ms-input-placeholder {
        color: #272727;
        opacity: 1;
        transition: opacity .4s ease
    }

    .contact-form__item input:-moz-placeholder,
    .contact-form__item textarea:-moz-placeholder {
        color: #272727;
        opacity: 1;
        transition: opacity .4s ease
    }

    .contact-form__item--submit {
        margin-top: 20px;
        text-align: right;
        position: relative
    }

    .contact-form__item--submit .wpcf7-submit {
        right: 0;
        position: absolute;
        text-transform: uppercase
    }

    .contact-form__item--submit .wpcf7-submit.btn__arrow .btn__icon {
        top: 0
    }

    .contact-form__disclaimer {
        font-family: stobisans_regularregular, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 13px;
        color: #878787;
        display: block;
        line-height: 1.45em
    }

    .contact-form__disclaimer p {
        margin: 0
    }

    .contact-form .select2-container--default .select2-selection--single {
        background-color: transparent;
        color: #272727
    }

    .contact-form .select2-container--default .select2-selection--single:focus {
        outline: none
    }

    .contact-form .select2-container--default .select2-selection--single .select2-selection__rendered {
        letter-spacing: 0;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        color: #272727;
        padding: 5px 20px 5px 0;
        border-bottom: 1px solid silver
    }

    .contact-form .select2-container--default .select2-selection--single .select2-selection__arrow {
        background-image: url(//www.ccc.net/wp-content/themes/ccc001/assets/css/../svg/arrow-black.svg);
        background-size: 26px;
        top: -5px
    }

    .contact-form .select2-container {
        width: 100% !important
    }

    span.wpcf7-not-valid-tip {
        color: #dc1b21;
        font-size: .75em
    }

    div.wpcf7-validation-errors {
        color: #fff;
        background-color: #000;
        border-color: #000;
        margin-left: 0;
        margin-right: 0
    }

    .wpcf7-submit {
        border: none;
        background: 0 0
    }

    div.wpcf7-aborted,
    div.wpcf7-mail-sent-ng {
        color: #fff;
        background-color: #dc1b21;
        border-color: #dc1b21;
        margin-left: 0;
        margin-right: 0
    }

    div.wpcf7-mail-sent-ok {
        color: #fff;
        background-color: #000;
        border-color: #000;
        margin-left: 0;
        margin-right: 0
    }

    .wpcf7 form .wpcf7-response-output {
        margin: 30px 0 0;
        padding: 20px;
        border-width: 1px;
        border-style: solid;
        border-color: #46b450;
        color: #46b450;
        letter-spacing: normal
    }

    .wpcf7 form.invalid .wpcf7-response-output {
        border-color: #dc1b21;
        color: #dc1b21
    }

    .map-contacts {
        width: 100%;
        position: relative;
        padding: 0;
        background-color: #2b2b2b;
        color: #fff
    }

    @media (min-width: 400px) {
        .map-contacts {
            padding: 0
        }
    }

    @media (min-width: 768px) {
        .map-contacts {
            padding: 0
        }
    }

    .map-contacts__map {
        position: relative;
        width: 100%;
        height: 100vh;
        transition: all .4s ease
    }

    @media (min-width: 768px) {
        .map-contacts__map {
            height: 100vh
        }
    }

    .map-contacts__popup {
        position: absolute;
        top: 80px;
        right: 20px;
        left: 20px;
        padding: 20px;
        background-color: #fff;
        color: #272727;
        width: auto;
        z-index: 2
    }

    @media (min-width: 768px) {
        .map-contacts__popup {
            position: absolute;
            top: 160px;
            right: 0;
            left: auto;
            width: 300px
        }
    }

    .map-contacts__popup__inner {
        width: 100%;
        height: 100%
    }

    .map-contacts__popup__close {
        position: absolute;
        top: 25px;
        right: 20px;
        cursor: pointer
    }

    .map-contacts__popup__close:hover svg path {
        stroke: #272727
    }

    .map-contacts__popup__close svg {
        width: 20px;
        height: 20px
    }

    .map-contacts__popup__close svg path {
        stroke: #dc1b21;
        transition: stroke .4s ease
    }

    .map-contacts__popup__title {
        position: relative;
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 20px;
        line-height: 1.45em;
        font-weight: 400;
        color: #2b2b2b;
        padding-bottom: 12px;
        padding-right: 25px
    }

    .map-contacts__popup__title:after {
        content: "";
        background-color: #272727;
        width: 30px;
        height: 1px;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .map-contacts__popup__country {
        font-size: 15px;
        color: #dc1b21
    }

    .map-contacts__popup__company,
    .map-contacts__popup__country {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif
    }

    .map-contacts__popup__company {
        font-size: 14px;
        color: #272727
    }

    .map-contacts__popup__bg {
        position: relative;
        width: 100%;
        height: 180px;
        margin-bottom: 15px
    }

    .map-contacts__popup__bg__inner {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat
    }

    .map-contacts__popup__address {
        font-size: 13px;
        line-height: 1.55em;
        color: #272727;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    .map-contacts__popup__address__icon {
        margin-right: 8px;
        position: relative;
        top: 2px
    }

    .map-contacts__popup__address__icon svg {
        width: 14px;
        height: 20px
    }

    .map-contacts__popup__address__icon svg path {
        fill: #dc1b21
    }

    .map-contacts__popup__address p {
        margin: 0
    }

    .map-contacts__popup__telephone {
        font-size: 13px;
        color: #272727
    }

    .map-contacts__popup__telephone span {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        margin-right: 8px
    }

    .map-contacts__popup a {
        color: #272727
    }

    .map-contacts__popup a:hover {
        color: #dc1b21
    }

    .smoothy {
        transition: -webkit-transform .8s ease;
        transition: transform .8s ease;
        transition: transform .8s ease, -webkit-transform .8s ease
    }

    @media (min-width: 768px) {
        [data-animation-top] {
            opacity: 0;
            -webkit-transform: translateY(80px);
            -ms-transform: translateY(80px);
            transform: translateY(80px);
            transition: opacity 1s ease, -webkit-transform 1s ease;
            transition: opacity 1s ease, transform 1s ease;
            transition: opacity 1s ease, transform 1s ease, -webkit-transform 1s ease;
            position: relative;
            z-index: 2
        }
    }

    @media (min-width: 768px) {
        [data-animation-top].animated {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0)
        }
    }

    [data-zoomin-image] {
        overflow: hidden
    }

    [data-zoomin-image]>a {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2
    }

    [data-zoomin-image]>a.no-absolute {
        position: relative
    }

    .zoom-in-image {
        display: block
    }

    .gray-scale-image {
        -webkit-filter: grayscale(100%);
        -webkit-filter: grayscale(1);
        filter: grayscale(100%);
        -webkit-filter: url(//www.ccc.net/wp-content/themes/ccc001/assets/css/../svg/grayscale.svg#grayscale);
        filter: url(//www.ccc.net/wp-content/themes/ccc001/assets/css/../svg/grayscale.svg#grayscale);
        -webkit-filter: gray;
        filter: gray;
        transition: filter .4s linear, -webkit-filter .4s linear
    }

    .gray-scale-image:hover {
        -webkit-filter: none;
        filter: none
    }

    .activities-projects {
        position: relative;
        width: 100%;
        padding: 0 15px 60px;
        overflow: hidden
    }

    @media (min-width: 768px) {
        .activities-projects {
            padding: 0 0 120px
        }
    }

    .activities-projects__title {
        width: 100%;
        text-align: left;
        padding-left: 0;
        color: #dc1b21;
        opacity: 1;
        margin: 0
    }

    .activities-projects__slide {
        width: 100%;
        position: relative;
        z-index: 2
    }

    @media (min-width: 400px) {
        .activities-projects__slide {
            width: 100%
        }
    }

    .activities-projects__slide .slick-list {
        padding: 0 !important
    }

    .activities-projects__slide__item {
        width: 100%;
        height: 380px;
        position: relative;
        overflow: hidden
    }

    @media (min-width: 768px) {
        .activities-projects__slide__item {
            height: 480px
        }
    }

    .activities-projects__slide__item__inner {
        width: 100%;
        height: 100%
    }

    .activities-projects__slide__item__link {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1
    }

    .activities-projects__slide__item__content {
        position: relative;
        width: 100%;
        height: 100%;
        padding: 30px;
        z-index: 0
    }

    .activities-projects__slide__item__content:after {
        content: "";
        background-color: rgba(0, 0, 0, .4)
    }

    .activities-projects__slide__item__bg,
    .activities-projects__slide__item__content:after {
        position: absolute;
        top: -8px;
        right: 0;
        bottom: 0;
        left: -16%;
        z-index: -1
    }

    .activities-projects__slide__item__title {
        position: relative;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-size: 20px;
        line-height: 1.45em;
        font-weight: 400;
        color: #fff;
        padding-bottom: 22px;
        margin: 0
    }

    .activities-projects__slide__item__title:after {
        content: "";
        background-color: #fff;
        width: 30px;
        height: 2px;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .activities-projects__slide__item__location {
        font-size: 14px;
        letter-spacing: .03em;
        padding-top: 20px
    }

    .activities-projects__slide__item__industry,
    .activities-projects__slide__item__location {
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        line-height: 1em;
        color: #fff
    }

    .activities-projects__slide__item__industry {
        font-size: 17px;
        letter-spacing: .1em;
        position: absolute;
        bottom: 20px;
        left: 30px;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left
    }

    .activities-projects__slide__controls {
        position: relative;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-top: 40px
    }

    @media (min-width: 768px) {
        .activities-projects__slide__controls {
            padding-top: 80px
        }
    }



    @media (max-width: 399px) {
        .csr-newsletters-overview__item__box .btn__arrow--down .btn__icon {
            display: none
        }
    }

    .social__share__buttons {
        border-top: 1px solid silver;
        padding-top: .5em;
        margin-top: 3em
    }

    @media (min-width: 1024px) {
        a.btn__arrow.social__share__links {
            padding: 15px;
            margin: 15px 15px 0 0
        }

        .btn__arrow.social__share__links svg {
            width: 30px;
            height: 30px;
            margin-bottom: -10px;
            margin-right: 10px
        }
    }

    @media (max-width: 1023px) {
        a.btn__arrow.social__share__links {
            padding: 5px 10px;
            margin: 5px 5px 0 0
        }

        .btn__arrow.social__share__links svg {
            width: 20px;
            height: 20px;
            margin-bottom: -5px;
            margin-right: 5px
        }
    }

    .btn__arrow--solid-dark.social__share__links:hover:after {
        -webkit-transform: scaleY(0);
        -ms-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: center top;
        -ms-transform-origin: center top;
        transform-origin: center top;
        transition: -webkit-transform .4s cubic-bezier(.77, 0, .175, 1) 0s;
        transition: transform .4s cubic-bezier(.77, 0, .175, 1) 0s;
        transition: transform .4s cubic-bezier(.77, 0, .175, 1) 0s, -webkit-transform .4s cubic-bezier(.77, 0, .175, 1) 0s
    }

    .btn__arrow--solid-dark.facebook:after {
        background-color: #4267b2
    }

    .btn__arrow--solid-dark.linkedin:after {
        background-color: #2867b2
    }

    .btn__arrow--solid-dark.instagram:after {
        background-color: #c13584
    }

    .btn__arrow--solid-dark.social__share__links:after {
        -webkit-transform: scaleY(1);
        -ms-transform: scaleY(1);
        transform: scaleY(1);
        -webkit-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
        transform-origin: center bottom;
        transition: -webkit-transform .4s cubic-bezier(.77, 0, .175, 1) .5s;
        transition: transform .4s cubic-bezier(.77, 0, .175, 1) .5s;
        transition: transform .4s cubic-bezier(.77, 0, .175, 1) .5s, -webkit-transform .4s cubic-bezier(.77, 0, .175, 1) .5s
    }

    .btn__arrow--solid-dark.social__share__links:before {
        background-color: #272727;
        transition: background-color 0s linear .8s
    }

    .page-template-template-startups .gallery-columns-2 {
        display: flex;
        gap: 0 40px
    }

    @media (max-width: 1023px) {
        .page-template-template-startups .gallery-columns-2 {
            display: block;
            gap: 10px
        }

        .page-template-template-startups .gallery-columns-2 img:first-of-type {
            padding-bottom: 0
        }
    }

    .contact-form__form.startups {
        margin-top: 30px
    }

    @media (min-width: 1024px) {
        .contact-form__form.startups {
            margin-top: 10px
        }
    }

    .contact-form__form.startups .contact__info {
        position: relative;
        padding: 60px;
        padding-bottom: 30px;
        padding-left: 40px;
        border: 1px solid #272727;
        margin-bottom: 80px;
        background-color: #fff
    }

    .contact__info.questionnaire {
        margin-bottom: 30px !important
    }

    .contact-form__form.startups .cmp-main-content__quote__subtitle {
        color: #fff;
        letter-spacing: 0;
        text-transform: uppercase;
        margin-bottom: 30px;
        position: absolute;
        top: -21px;
        left: 60px;
        padding: 10px 20px;
        background-color: #dc1b21;
        border: 1px solid #272727
    }

    .contact-form__form .contact-form__item p {
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        color: #272727
    }

    .contact-form__form .contact-form__item label span {
        color: #dc1b21;
        padding-left: 5px
    }

    .contact-form__form .select2-container {
        width: 100% !important
    }

    .contact-form__form .contact-form__item input {
        padding: 9px 0 8px
    }

    .contact-form__form .contact-form__item [data-class=wpcf7cf_group] {
        margin-top: 30px
    }

    .contact-form__form .contact-form__item [data-class=wpcf7cf_group] p {
        margin-top: 0
    }

    .contact-form__form.startups .contact__info.questionnaire .contact-form__item input[type=text],
    .contact-form__form .contact-form__item textarea {
        background-color: #fafafa;
        padding: 10px 20px;
        resize: vertical;
        overflow: visible
    }

    .contact-form__form .select2-container--default .select2-selection--single,
    .contact-form__form .select2-container--default .select2-selection--multiple {
        background-color: transparent;
        color: #272727
    }

    .contact-form__form .select2-container--default .select2-selection--single:focus {
        outline: none
    }

    .contact-form__form .select2-container--default .select2-selection--single .select2-selection__rendered {
        letter-spacing: 0;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        color: #272727;
        padding: 5px 20px 5px 0;
        border-bottom: 1px solid silver
    }

    .contact-form__form .select2-container--default .select2-selection--single .select2-selection__arrow,
    .contact-form__form .select2-container--default .select2-selection--multiple .select2-selection__arrow {
        background-image: url(//www.ccc.net/wp-content/themes/ccc001/assets/css/../svg/arrow-black.svg);
        background-size: 26px;
        top: -5px
    }

    .contact-form__form .select2-container--default .select2-selection--multiple .select2-selection__rendered {
        padding: 0
    }

    .contact-form__form .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: transparent;
        border: none;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        color: #272727;
        margin-bottom: -6px
    }

    .contact-form__form .select2-container--focus.select2-container--default.select2-container--focus {
        border-bottom: 1px solid silver
    }

    .contact-form__form span#technology {
        margin-top: 20px;
        font-family: stobisans_mediummedium, Calibri, Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        color: #272727;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 10px 20px
    }

    .contact-form__form span#technology .wpcf7-list-item {
        display: inline-flex;
        flex-grow: 2;
        width: calc(100%*(1/2) - 10px - 1px);
        margin: 0
    }

    @media (max-width: 768px) {
        .contact-form__form span#technology .wpcf7-list-item {
            width: calc(100%*(1/1) - 10px - 1px)
        }
    }

    .contact-form__form.startups input[type=checkbox] {
        appearance: none;
        background-color: #fafafa;
        margin: 0 10px 0 0;
        padding: 0;
        font: inherit;
        color: #272727;
        width: 20px;
        height: 20px;
        border: 1px solid #272727;
        transform: translateY(.35em);
        display: grid;
        place-content: center;
        cursor: pointer !important
    }

    .contact-form__form.startups input[type=checkbox]:before {
        content: "";
        width: .65em;
        height: .65em;
        transform: scale(0);
        transition: .12s transform ease-in-out;
        background-color: #dc1b21
    }

    .contact-form__form.startups input[type=checkbox]:checked+.wpcf7-list-item-label {
        color: #dc1b21
    }

    .contact-form__form.startups input[type=checkbox]:checked:before {
        transform: scale(1);
        transform-origin: bottom left;
        clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%)
    }

    .contact-form__form.startups input[type=checkbox]:focus {
        outline: max(1px, .15em) solid #272727;
        outline-offset: max(1px, .15em)
    }

    .contact-form__form.startups input[type=checkbox]:disabled {
        color: #959495;
        cursor: not-allowed
    }

    .contact-form__form span#technology.questionnaire {
        margin-top: 0
    }

    .contact-form__form span#technology.questionnaire .wpcf7-list-item {
        display: flex;
        flex-grow: 0;
        width: inherit;
        margin: 0;
        margin-right: 30px
    }

    .contact-form__form span#technology.questionnaire .wpcf7-list-item p {
        color: #272727
    }

    .contact-form__form span#technology.questionnaire .wpcf7-list-item:last-of-type {
        margin-right: 0
    }

    .contact-form__form.startups .form__wordcount {
        color: #878787;
        font-size: 12px
    }

    .contact-form__form.startups .form__wordcount span {
        color: #dc1b21
    }

    .contact-form__form.startups .wpcf7 input[type=file]::-webkit-file-upload-button {
        visibility: hidden
    }

    .contact-form__form.startups .wpcf7 input[type=file]:before {
        content: 'Upload Presentation';
        text-transform: lowercase;
        color: silver;
        display: inline-block;
        background-color: #fafafa;
        border: 1px solid silver;
        border-radius: 0;
        padding: 10px 20px;
        outline: none;
        white-space: nowrap;

        transition: color .4s ease;
        cursor: pointer
    }

    .contact-form__form.startups .wpcf7 input[type=file]:hover:before {
        border-color: #272727;
        color: #272727
    }

    .contact-form__form.startups .wpcf7 input[type=file]:active {
        outline: 0
    }

    .contact-form__form.startups .wpcf7 input[type=file]:active:before {
        background: #272727;
        color: #fff
    }

    .contact-form__form.startups .cmp-main-content__buttons,
    .contact-form__form.startups .cmp-main-content__buttons__inner {
        padding: 0;
        text-align: right
    }

    .contact-form__form.startups .cmp-main-content__buttons button {
        padding: 15px 30px;
        text-transform: uppercase;
        border: none
    }

    .contact-form__form.startups .cmp-main-content__buttons button .btn__text {
        margin-top: 5px
    }

    .contact-form__form.startups .wpcf7-spinner {
        background-color: #fff;
        margin-left: 0
    }

    .contact-form__form.startups .wpcf7-spinner:before {
        background-color: #272727
    }

    .contact-form__form.startups .back__container {
        border-top: 1px solid #878787;
        margin-top: 30px
    }

    .contact-form__back {
        padding-top: 20px;
        font-family: stobisans_boldbold, Calibri, Helvetica, Arial, sans-serif;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 400
    }

    @media (min-width: 768px) {
        .contact-form__back {
            font-size: 13px
        }
    }

    .contact-form__back svg {
        width: auto;
        height: 14px;
        position: relative;
        top: 2px;
        margin-right: 10px
    }

    @media (min-width: 768px) {
        .contact-form__back svg {
            margin-right: 20px;
            height: 20px;
            top: 4px
        }
    }

    .contact-form__back a {
        color: #272727;
        letter-spacing: 0;
        cursor: pointer
    }

    .contact-form__back a:hover {
        color: #dc1b21
    }

    .contact-form__back a:hover svg path {
        stroke: #dc1b21;
        transition: stroke .4s cubic-bezier(.77, 0, .175, 1) 0s
    }

    [data-class=wpcf7cf_group],
    .wpcf7cf_remove,
    .wpcf7cf_add {
        display: none
    }

    .wpcf7cf_repeater_sub {
        margin-bottom: 20px
    }

    .wpcf7cf_repeater_controls,
    .wpcf7cf_step_controls {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 20px
    }

    .wpcf7cf_multistep .wpcf7cf_step {
        width: 100%
    }

    .wpcf7cf_multistep .wpcf7cf_step .step-title {
        display: none
    }

    .wpcf7cf_multistep .wpcf7cf_steps-dots {
        display: flex;
        width: 100%;
        margin-bottom: 20px;
        flex-wrap: wrap
    }

    .wpcf7cf_multistep .wpcf7cf_steps-dots .dot .step-index {
        display: inline-block;
        border-radius: 50%;
        background: #dfdfdf;
        color: #000;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center
    }

    .wpcf7cf_multistep .wpcf7cf_steps-dots .dot {
        border-bottom: 5px solid #dfdfdf;
        text-align: center;
        flex: 1;
        padding: 15px;
        min-width: 120px
    }

    .wpcf7cf_multistep .wpcf7cf_steps-dots .dot.completed {
        border-bottom: 5px solid #333
    }

    .wpcf7cf_multistep .wpcf7cf_steps-dots .dot.active {
        border-bottom: 5px solid #333;
        font-weight: 700
    }

    .wpcf7cf_multistep .wpcf7cf_steps-dots .dot.completed .step-index {
        background-color: #333;
        color: #fff
    }

    .wpcf7cf_multistep .wpcf7cf_steps-dots .dot.active .step-index {
        background-color: #333;
        color: #fff
    }

    .wpcf7cf_step_controls .disabled {
        pointer-events: none;
        cursor: default;
        opacity: .5
    }

    :root {
        --wpforms-field-border-radius: 3px;
        --wpforms-field-background-color: #fff;
        --wpforms-field-border-color: rgba(0, 0, 0, .25);
        --wpforms-field-text-color: rgba(0, 0, 0, .7);
        --wpforms-label-color: rgba(0, 0, 0, .85);
        --wpforms-label-sublabel-color: rgba(0, 0, 0, .55);
        --wpforms-label-error-color: #d63637;
        --wpforms-button-border-radius: 3px;
        --wpforms-button-background-color: #066aab;
        --wpforms-button-text-color: #fff;
        --wpforms-field-size-input-height: 43px;
        --wpforms-field-size-input-spacing: 15px;
        --wpforms-field-size-font-size: 16px;
        --wpforms-field-size-line-height: 19px;
        --wpforms-field-size-padding-h: 14px;
        --wpforms-field-size-checkbox-size: 16px;
        --wpforms-field-size-sublabel-spacing: 5px;
        --wpforms-field-size-icon-size: 1;
        --wpforms-label-size-font-size: 16px;
        --wpforms-label-size-line-height: 19px;
        --wpforms-label-size-sublabel-font-size: 14px;
        --wpforms-label-size-sublabel-line-height: 17px;
        --wpforms-button-size-font-size: 17px;
        --wpforms-button-size-height: 41px;
        --wpforms-button-size-padding-h: 15px;
        --wpforms-button-size-margin-top: 10px;
    }
</style>
<section>
    <div class="container">
    <div class="projects__list"><!---->
        <div class="project__items">
            <div class="grid grid--full">
                <div class="grid__item mob--one-half lap--one-third">
                    <div class="project__item">
                        <div class="project__item__inner"><a href="#" class="project__item__link"></a>
                            <div class="project__item__bg" style="background-image: url(servise1/4.jpg);"></div>
                            <div class="project__item__content">
                                <h3 class="project__item__title">King Hussein Cancer Center Outpatient Tower &amp; East Tower</h3>
                                <div class="project__item__location">JORDAN</div>
                                <div class="project__item__industry">BUILDINGS</div>
                            </div>
                        </div>
                        <div class="project__item__hover">
                            <div class="project__item__hover__inner">
                                <div class="project__item__hover__title">King Hussein Cancer Center Outpatient Tower &amp; East Tower</div>
                                <div class="project__item__hover__item"><span>

                                        PROJECT NAME:

                                    </span> King Hussein Cancer Center Outpatient Tower &amp; East Tower

                                </div>
                                <div class="project__item__hover__item"><span>

                                        LOCATION:

                                    </span> Amman, Jordan

                                </div>
                                <div class="project__item__hover__item"><span>

                                        CLIENT:

                                    </span> King Hussein Cancer Foundation

                                </div>
                                <div class="project__item__hover__item"><span>

                                        SCOPE:

                                    </span> Construction

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DURATION:

                                    </span> 36 Months

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DATE OF COMPLETION:

                                    </span> March 2017

                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item mob--one-half lap--one-third">
                    <div class="project__item">
                        <div class="project__item__inner"><a href="#" class="project__item__link"></a>
                            <div class="project__item__bg" style="background-image: url(servise1/5.webp);"></div>
                            <div class="project__item__content">
                                <h3 class="project__item__title"> Helwan Thermal Power Plant</h3>
                                <div class="project__item__location">SAUDI ARABIA</div>
                                <div class="project__item__industry">POWER</div>
                            </div>
                        </div>
                        <div class="project__item__hover">
                            <div class="project__item__hover__inner">
                                <div class="project__item__hover__title"> Helwan Thermal Power Plant</div>
                                <div class="project__item__hover__item"><span>

                                        PROJECT NAME:

                                    </span> Helwan Thermal Power Plant

                                </div>
                                <div class="project__item__hover__item"><span>

                                        LOCATION:

                                    </span> saudi arabia

                                </div>
                                <div class="project__item__hover__item"><span>

                                        CLIENT:

                                    </span> Upper saudi  Electricity Production Company (USEPC)

                                </div>
                                <div class="project__item__hover__item"><span>

                                        SCOPE:

                                    </span> Underground utilities, foundations and MEP works for buildings.

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DURATION:

                                    </span> 52 Months

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DATE OF COMPLETION:

                                    </span> March 2019

                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item mob--one-half lap--one-third">
                    <div class="project__item">
                        <div class="project__item__inner"><a href="#" class="project__item__link"></a>
                            <div class="project__item__bg" style="background-image: url(servise1/6.webp);"></div>
                            <div class="project__item__content">
                                <h3 class="project__item__title">Abu Dhabi Plaza</h3>
                                <div class="project__item__location">KAZAKHSTAN</div>
                                <div class="project__item__industry">BUILDINGS</div>
                            </div>
                        </div>
                        <div class="project__item__hover">
                            <div class="project__item__hover__inner">
                                <div class="project__item__hover__title">Abu Dhabi Plaza</div>
                                <div class="project__item__hover__item"><span>

                                        PROJECT NAME:

                                    </span> Abu Dhabi Plaza

                                </div>
                                <div class="project__item__hover__item"><span>

                                        LOCATION:

                                    </span> Astana, Kazakhstan

                                </div>
                                <div class="project__item__hover__item"><span>

                                        CLIENT:

                                    </span> Aldar EuroAsia LLP

                                </div>
                                <div class="project__item__hover__item"><span>

                                        SCOPE:

                                    </span> Design, Procurement, Construction

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DURATION:

                                    </span> 84 Months

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DATE OF COMPLETION:

                                    </span> Expected March 2020

                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item mob--one-half lap--one-third">
                    <div class="project__item">
                        <div class="project__item__inner"><a href="#" class="project__item__link"></a>
                            <div class="project__item__bg" style="background-image: url(servise1/7.webp);"></div>
                            <div class="project__item__content">
                                <h3 class="project__item__title">Jazan Refinery, Package 4 &amp; 5, Tank Farms</h3>
                                <div class="project__item__location">SAUDI ARABIA</div>
                                <div class="project__item__industry">PROCESS PLANTS</div>
                            </div>
                        </div>
                        <div class="project__item__hover">
                            <div class="project__item__hover__inner">
                                <div class="project__item__hover__title">Jazan Refinery, Package 4 &amp; 5, Tank Farms</div>
                                <div class="project__item__hover__item"><span>

                                        PROJECT NAME:

                                    </span> Jazan Refinery, Package 4 &amp; 5, Tank Farms

                                </div>
                                <div class="project__item__hover__item"><span>

                                        LOCATION:

                                    </span> Jazan, Kingdom of Saudi Arabia

                                </div>
                                <div class="project__item__hover__item"><span>

                                        CLIENT:

                                    </span> Saudi Aramco

                                </div>
                                <div class="project__item__hover__item"><span>

                                        SCOPE:

                                    </span> Construction

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DURATION:

                                    </span> 46 Months

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DATE OF COMPLETION:

                                    </span> September 2017

                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item mob--one-half lap--one-third">
                    <div class="project__item">
                        <div class="project__item__inner"><a href="#" class="project__item__link"></a>
                            <div class="project__item__bg" style="background-image: url(servise1/8.webp);"></div>
                            <div class="project__item__content">
                                <h3 class="project__item__title">Saraya Aqaba</h3>
                                <div class="project__item__location">JORDAN</div>
                                <div class="project__item__industry">BUILDINGS</div>
                            </div>
                        </div>
                        <div class="project__item__hover">
                            <div class="project__item__hover__inner">
                                <div class="project__item__hover__title">Saraya Aqaba</div>
                                <div class="project__item__hover__item"><span>

                                        PROJECT NAME:

                                    </span> Saraya Aqaba

                                </div>
                                <div class="project__item__hover__item"><span>

                                        LOCATION:

                                    </span> Aqaba, Jordan

                                </div>
                                <div class="project__item__hover__item"><span>

                                        CLIENT:

                                    </span> Saraya Aqaba Real Estate Development Co. PSC

                                </div>
                                <div class="project__item__hover__item"><span>

                                        SCOPE:

                                    </span> Engineering, Procurement, Construction and Commissioning

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DURATION:

                                    </span> 80 Months

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DATE OF COMPLETION:

                                    </span> March 2020

                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item mob--one-half lap--one-third">
                    <div class="project__item">
                        <div class="project__item__inner"><a href="#" class="project__item__link"></a>
                            <div class="project__item__bg" style="background-image: url(servise1/9.webp);"></div>
                            <div class="project__item__content">
                                <h3 class="project__item__title">Alba Phase II Expansion</h3>
                                <div class="project__item__location">EQUATORIAL GUINEA</div>
                                <div class="project__item__industry">PROCESS PLANTS</div>
                            </div>
                        </div>
                        <div class="project__item__hover">
                            <div class="project__item__hover__inner">
                                <div class="project__item__hover__title">Alba Phase II Expansion</div>
                                <div class="project__item__hover__item"><span>

                                        PROJECT NAME:

                                    </span> Alba Phase II Expansion

                                </div>
                                <div class="project__item__hover__item"><span>

                                        LOCATION:

                                    </span> Bioko Island, Equatorial Guinea

                                </div>
                                <div class="project__item__hover__item"><span>

                                        CLIENT:

                                    </span> Marathon E.G. Production Ltd.

                                </div>
                                <div class="project__item__hover__item"><span>

                                        SCOPE:

                                    </span> Construction and Commissioning of a gas and NGL plants

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DURATION:

                                    </span> 24 Months

                                </div>
                                <div class="project__item__hover__item"><span>

                                        DATE OF COMPLETION:

                                    </span> December 2004

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <!-- Images Gallery Section !-->
    <h1 class="our-projects">OUR PROJECTS</h1>
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Residential Complexes in South Borders – Jazan (A)</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image1.png" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Saudi Railways Organization Rabigh, KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image2.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Rayadah Investment Company
                        Riyadh ,KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image3.jpg" alt="">

            </div>

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px; font-family:Raleway"> Private Development<br>
                        Beirut, Lebanon </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image4.jpg" alt="">

            </div>


            <!-- Row Data 2-->

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Meydan Group
                        Dubai, UAE</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image5.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Kingdom Holding Co.
                        Riyadh,KSA </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image6.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Princess Noura University
                        Riyadh,KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image7.jpg" alt="">

            </div>

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px; font-family:Raleway">Qatar Islamic Bank
                        Doha, Qatar </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image8.jpg" alt="">

            </div>

            <!-- Row Data 3!-->

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Rayadah Investment Co.
                        KAFD Riyadh, KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image9.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Diriyah Gate Development Authority
                        Riyadh , KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image10.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Saudi Aramco
                        Jeddah, KSA </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image11.jpg" alt="">

            </div>

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px; font-family:Raleway">Kingdom Holding Co.
                        Riyadh,KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image12.jpg" alt="">

            </div>


            <!-- Row Data 4-->

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Qiddiya
                        Riyadh , KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image13.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">ROYAL SAUDI AIRFORCE projects</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image14.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Sabic
                        Riyadh, KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image15.jpg" alt="">

            </div>

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px; font-family:Raleway"> Saudi British Bank
                        Riyadh,KSA </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image16.jpg" alt="">

            </div>




            <!-- Row Data 5-->

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Kingdom Holding Co.
                        Riyadh,KSA </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image17.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> ROYAL SAUDI NAVY
                        SAWARI (1) Fleet Life Extension Program - New Shipyard Extension 2015-2017 </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image18.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Council of Development & Reconstruction
                        Beirut, Lebanon</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image19.jpg" alt="">

            </div>

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px; font-family:Raleway">Samba Headquarters Tower (KAFD)
                        Riyadh,KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image27.jpg" alt="">

            </div>







            <!-- Row Data 6-->

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Higher Education Fund
                        Tabouk, KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image21.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> MINISTRY OF DEFENSE
                        King Khaled International Airport Central plant & Utility Buildings 1981-1982 </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image17.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Union Properties
                        Dubai, UAE</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image23.jpg" alt="">

            </div>

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px; font-family:Raleway">Rayadah Investment Co.
                        Riyadh,KSA </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image24.jpg" alt="">

            </div>



            <!-- Row Data 7-->

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">NEW DOHA INTERNATION AIRPORT
                        Solution 2013-2015</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image25.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Al Dar Properties
                        Abu Dhabi, UAE </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image26.png" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Public Works Authority
                        Doha, Qatar</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image27.jpg" alt="">

            </div>

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px; font-family:Raleway">King Salman Park Foundation
                        Riyadh , KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image28.jpg" alt="">

            </div>






            <!-- Row Data 8-->

            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Jubail Energy Company
                        Jubail, KSA </p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image29.png" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;"> Rayadah Investment Company
                        Riyadh ,KSA</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image30.jpg" alt="">

            </div>


            <div class="col-lg-3 images-coloumn">

                <div class="paragraph">
                    <p style="color: white; font-size:16px;">Cayan / The Jewels Ltd
                        Dubai, UAE</p>
                   
                    <!-- <p> Residential Complexes in South Borders – Jazan (A) </p>  -->
                </div>
                <img class="civil_image" width="370px" height="350px" src="assets/images/image31.jpg" alt="">

            </div>



        </div>
    </div>

</section>
<br>
@include('layouts.footer')