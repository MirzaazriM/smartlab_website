@extends('layouts.app')


<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 3rem;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2rem;
        color: var(--h2-color) !important;
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4rem;
        color: #354144 !important;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
    }

    #firstSection {
        width: 90%;
        height: calc(100vh - 80px);
        /* TODO Check height of menu */
        margin: 0 auto;
        padding: 0;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    #firstSection>div {
        width: 50%;
        margin-top: -50px;
        /* To move section little bit to the top of the page */
        align-content: space-between;
    }

    #joinTextSection button {
        border-radius: 50px;
        padding: 10px;
        background-color: #bebebe;
        width: 120px;
        color: #111;
        cursor: pointer;
        box-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5);
        outline: none;
    }

    #joinTextSection button:hover {
        box-shadow: 2px 3px 2px rgba(150, 150, 150, 0.5), -2px 0 2px rgba(150, 150, 150, 0.5);
    }

    #joinTextSection button:active {
        box-shadow: 1px -2px 1px rgba(150, 150, 150, 0.5);
    }

    #availablePositions {
        width: 100%;
        text-align: center;
    }


    /* Second section */
    #secondSection {
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    #secondSection .jobOffer {
        border-radius: 10px;
        width: 45%;
        box-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5), -2px -2px 2px rgba(150, 150, 150, 0.5);
        display: flex;
        flex-direction: column;
    }

    #secondSection .jobOffer .jobImage {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        display: inline-block;
        width: 100%;
        height: 300px;
    }


    .jobHeading {
        color: orange;
        width: 100%;
        text-align: center;
    }


    .jobInfo {
        box-sizing: border-box;
        padding: 30px;
    }


    .jobButton {
        position: relative;
        left: 50%;
        margin-left: -80px;
        border-radius: 50px;
        padding: 10px;
        background-color: #007bff;
        width: 140px;
        color: #fff;
        cursor: pointer;
        box-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5);
        outline: none !important;
    }


    /* Section three */
    #sectionThree {
        width: 840px;
        padding: 10px;
        margin: 0 auto;
    }


    #sectionThree>h1 {
        width: 100%;
        text-align: center;
    }


    #careerForm {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }


    #careerForm>div {
        width: 48%;
    }

    #careerForm textarea {
        height: 200px;
        resize: none;
    }


    #uploadFileArea {
        width: 100%;
        height: 108px;
        cursor: pointer;
    }


    #uploadFileArea>p {
        font-size: 16px;
        padding-top: 22px;
        text-align: center;
    }

    #inputFile {
        display: none;
    }


    .policyText {
        font-size: 12px;
        color: #aaa;
        position: relative;
        left: 4px;
    }

    #verifiedIcon {
        width: 60px;
        height: 60px;
        position: relative;
        bottom: 5px;
    }

    .nav-list {
        color: rgb(20, 33, 61) !important;
    }

    .grey {
        color: rgb(20, 33, 61) !important;
    }

    .arrow::before {
        background-color: rgb(20, 33, 61) !important;
    }

    .arrow:hover:before {
        transform: rotateX(-180deg) translate(-100%, -170%);
        animation: arrow 0.2s ease-in-out forwards !important;
    }

    .nav-top p {
        color: rgb(20, 33, 61) !important;
    }

    .nav-top label {
        color: rgb(20, 33, 61) !important;
    }

    @keyframes arrow {
        0% {
            background-color: var(--h1-color);
        }

        50% {
            background-color: var(--h1-color);
        }

        100% {
            background-color: white;
        }
    }

    .header-container {
        position: relative;
    }

    .margin-b-150 {
        margin-bottom: 250px !important;
    }

    .header-background {
        position: absolute;
        z-index: -100;
        transform: rotate(0deg);
        top: -80%;
        right: -26%;
        width: 88%;
    }

    .header-content {
        display: flex;
        align-items: center;
    }

    .header-content-left {
        flex-basis: 50%;
        padding-right: 50px;
    }

    .button {
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 260px;
        height: 70px;
        font-size: 1.4em !important;
        font-weight: 500;
        color: white;
        background-color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
        transition: all 0.2s ease-in;
        outline: none !important;
    }

    .button:hover {
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }

    .--gray {
        background-color: #C9D6E2;
        border-color: #C9D6E2;
        color: var(--h1-color) !important;
    }

    .--gray:hover {
        color: var(--h1-color) !important;
        border: 1px solid var(--h1-color) !important;
    }

    .header-content-right {
        flex-basis: 46%;
        margin-top: 150px;
    }

    .careers-positions-container {
        display: flex;
        justify-content: space-between;
    }

    .careers-positions {
        flex-basis: 49%;
        border-radius: 15px;
        overflow: hidden;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;

    }

    .carrers-positions-image-container {
        display: flex;
        background-color: var(--shadow-color);
        max-height: 300px;
        flex-basis: 100%;
    }

    .careers-positions-image {
        width: 50%;
        padding: 20px;
        height: 300px;
    }

    .--left-10px {
        position: relative;
        left: -30px;
    }

    .careers-positions-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px;
        flex-basis: 100%
    }

    .careers-positions-info p {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .careers-positions-info a {
        margin-top: .5rem;
    }

    .button-orange {
        background-color: var(--button-bg-orange) !important;
        border: 1px solid var(--button-bg-orange) !important;
    }

    .button-orange:hover {
        background-color: white !important;
        color: var(--button-bg-orange) !important;
        border: 1px solid var(--button-bg-orange) !important;
        box-shadow: none !important;
    }

    form input,
    form textarea,
    form select,
    #uploadFileArea {
        padding: 20px 20px !important;
        height: auto !important;
        box-sizing: border-box;
        border: 3px solid #c9d6e2 !important;
        border-radius: 10px !important;
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4em !important;
    }

    form textarea {
        height: 274px !important;
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4em !important;
    }

    form input:focus,
    form textarea:focus,
    form select:focus,
    #uploadFileArea:focus {
        -webkit-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        -moz-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        border: 3px solid rgba(0, 53, 145, 1) !important;
        font-size: 1.4em !important;
    }

    #uploadFileArea:active {
        -webkit-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        -moz-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        border: 3px solid rgba(0, 53, 145, 1) !important;
    }

    form button {
        position: relative;
        left: 49%;
        transform: translateX(-49%);
        background-color: var(--h1-color) !important;
        border: 1px solid var(--h1-color) !important;
    }

    form button:hover {
        background-color: white !important;
        color: var(--h1-color) !important;
        border: 1px solid var(--h1-color) !important;
    }

    .centar {
        text-align: center;
    }

    @media only screen and (max-width: 850px) {
        .header-background {
            position: absolute;
            z-index: -100;
            transform: rotate(17deg);
            top: -29%;
            right: -41vw;
            width: 157vw;
        }

        #careerForm {
            width: 90%;
            margin: 0 auto;
        }

        #careerForm>div {
            width: 100%;
        }

        form button {
            position: static;
            /* left: 49%; */
            transform: translateX(0);
        }

        #sectionThree {
            width: 100%;
        }

        .careers-positions-container {
            flex-direction: column;

        }

        .careers-positions {
            margin-bottom: 25px;
        }

        .header-content {
            flex-direction: column-reverse;
        }

        .header-content-right {
            margin-top: 50px;
            /* height: 100vw; */
            width: 70vw;
        }

        .header-content-left {
            padding-right: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .header-content-left .button {
            margin-top: 25px;
        }

        .margin-b-150 {
            margin-bottom: 150px !important;
        }
    }
</style>


@section('content')

<!-- TODO dont delete this-->
<!--@include('parts.break_space')-->


<!-- Join our team section -->
<section class="header-container margin-b-150 ">
    <img src="{{asset('/images/partner/join-us-header-img.svg')}}" alt="header background" class="header-background background-img">
    <div class="header-content contain">
        <div class="header-content-left">
            <h1 class="h1-font">@lang('careers.h1')</h1>
            <p class="p-font">@lang('careers.paragraph')</p>
            <button class="button --gray">@lang('careers.button')</button>
        </div>
        <div class="header-content-right">
            <img src="{{asset('/images/partner/join-us-header.svg')}}" alt="Join us header background">
        </div>
    </div>

</section>
<section>
    <h1 class="h1-font centar">@lang('careers.availablePositions')</h1>
    <div class="careers-positions-container contain">
        <div class="careers-positions">
            <div class="carrers-positions-image-container">
                <img class="careers-positions-image --left-10px" src="{{ asset('images/careers/megaphone-orange.svg') }}" alt="orange megaphone" />
                <img class="careers-positions-image " src="{{ asset('images/careers/designer-page-img.svg') }}" alt="designer wanted" />
            </div>

            <div class="careers-positions-info">
                <h2>@lang('careers.eL-h1')</h2>
                <p>
                    @lang('careers.opisEL')
                </p>
                <a href="{{asset('/pages/careers/elearning')}}"><button class="button button-orange">@lang('careers.readMore')</button></a>
            </div>
        </div>

        <div class="careers-positions">
            <div class="carrers-positions-image-container">
                <img class="careers-positions-image --left-10px" src="{{ asset('images/careers/megaphone-blue.svg') }}" alt="blue megaphone" />
                <img class="careers-positions-image" src="{{ asset('images/careers/developer-page-img.svg') }}" alt="developer wanted" />
            </div>

            <div class="careers-positions-info">
                <h2>@lang('careers.Dev-h1')</h2>
                <p>
                    @lang('careers.opisDev')
                </p>
                <a href="{{asset('/pages/careers/developer')}}"><button class="button">@lang('careers.readMore')</button></a>
            </div>
        </div>
    </div>




    <br /><br /><br />


    <div id="aboveSectionThree"></div>

    <br /><br />

    <div id="sectionThree">

        <h1 class="h1-font">@lang('careers.apply-h1')</h1>

        <br /><br />

        @include('parts.error_success')

        <form id="careerForm" action="/careers" method="POST" enctype="multipart/form-data">

            <!-- Include token -->
            @csrf

            <div class="form-group">
                <label class="p-font" for="name">@lang('careers.name')</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="" required>
            </div>

            <div class="form-group">
                <label class="p-font" for="surname">@lang('careers.prezime')</label>
                <input type="text" name="lastname" class="form-control" id="surname" placeholder="" required>
            </div>

            <div class="form-group">
                <label class="p-font" for="phone">@lang('careers.broj')</label>
                <input type="number" name="phone_number" class="form-control" id="phone" placeholder="" required>
            </div>

            <div class="form-group">
                <label class="p-font" for="name">@lang('careers.email')</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="" required>
            </div>

            <div class="form-group">
                <label class="p-font" for="name">@lang('careers.napomena')</label>
                <textarea name="message" class="form-control" id="name" placeholder="" required></textarea>
            </div>

            <div class="form-group">
                <label class="p-font" for="category">@lang('careers.kategorija')</label>
                <select class="form-control" name="category" id="category" required>
                    <option disabled>@lang('careers.choose-kategorija')</option>
                    <option value="designer">@lang('careers.dizajner')</option>
                    <option value="developer">@lang('careers.developer')</option>
                    <option value="ux-ui-designer">@lang('careers.dizajner-uxui')</option>
                    <option value="practitioner">@lang('careers.praktikant')</option>
                </select>


                <br />

                <label class="p-font" for="uploadFileArea">@lang('careers.files')</label>
                <div id="uploadFileArea" class="form-control" onclick="openUploadWindow()">
                    <p id="uploadText">@lang('careers.click-to') <br />@lang('careers.upload-files')</p>
                    <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
                </div>

            </div>


            <p class="policyText">@lang('careers.we-are-commited') <a href="#">@lang('careers.privacy')</a>.</p>

            <!-- Submit form -->
            <button id="sendCareerButton" class="button">@lang('careers.send') </button>

        </form>

    </div>


    <script>
        function openUploadWindow() {
            document.getElementById("inputFile").click();
        }


        function fileUploaded() {
            // TODO check if file is selected
            let uploadText = document.getElementById("uploadText");
            uploadText.innerHTML = "<img id='verifiedIcon' src='../images/icons/verified.svg' />";
        }
    </script>

    @endsection