@extends('layouts.app')
<style>
    .h3-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 3em;
        margin-top: 0;
        margin-bottom: 0;
        color: var(--h1-color);
    }

    .h4-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 1.4em;
        margin-top: 0;
        margin-bottom: 15px;
        color: var(--h2-color);
    }

    .h5-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 1.4em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
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

    #app {
        position: relative;
    }

    .team-member {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row-reverse;
        justify-content: left;
        align-items: center;
        margin-bottom: 50px !important;
        padding: 80px 100px;
        padding-left: 0;
        position: relative;
        justify-content: space-between;
        margin-top: 150px !important;
    }

    .team-img-container {
        position: relative;
        margin-right: 50px;
    }

    .team-mask {
        position: absolute;
        z-index: 0;
        top: 0;
    }


    .team-img-container {
        position: relative;
        height: 325px;
    }

    .team-img {
        z-index: 20;
        position: relative;
        padding-top: 0 !important;
        z-index: 20;
        position: relative;
        padding-top: 0 !important;
        transform: rotate(-154deg);
        clip-path: url(#clipPath);
        height: 325px;
        width: 285px;
    }

    .team-img img {
        transform: rotate(154deg);
        object-fit: contain;
        position: absolute;
        top: 0;
        padding-top: 0 !important;
        width: 100%;
        object-position: 0px 10px;
    }

    .blank img {
        width: 127% !important;
        object-position: 29px 44px !important;
    }

    .team-blue1 {
        position: absolute;
        top: -6px;
        width: 70%;
        transform: rotate(242deg);
        z-index: 10;
    }

    .team-orange1 {
        position: absolute;
        right: 132px;
        bottom: -23px;
        width: 60%;
        z-index: 10;
    }

    .team-blue2 {
        position: absolute;
        bottom: -17px;
        right: -5px;
        width: 41%;
        transform: rotate(0deg);
        z-index: 10;
    }

    .team-orange2 {
        position: absolute;
        right: 142px;
        bottom: 65px;
        transform: rotate(32deg);
        width: 65%;
        z-index: 10;
    }

    .team-blue3 {
        position: absolute;
        bottom: 6px;
        width: 31%;
        right: 8px;
        transform: rotate(242deg);
        z-index: 10;
    }

    .team-orange3 {
        position: absolute;
        right: 77px;
        top: -6px;
        width: 81%;
        z-index: 10;
        transform: rotate(-106deg);
    }

    .team-blue4 {
        position: absolute;
        width: 42%;
        transform: rotate(2deg);
        z-index: 10;
        bottom: 29px;
        left: -13px;
    }

    .team-orange4 {
        position: absolute;
        right: -28px;
        bottom: -38px;
        width: 81%;
        z-index: 10;
    }

    .team-description {
        text-align: left;
        width: 50%;
    }

    .team-description h5 {
        display: none;
    }

    .team-orange-circle {
        position: absolute;
        transform: rotate(-111deg);
        top: 0;
        width: 35%;
        right: -30vw;
        z-index: -100;
    }

    .team-orange-circle-bottom {
        position: absolute;
        width: 20%;
        /* bottom: -70px; */
        bottom: -5%;
        left: -26vw;
        /* left: -340px; */
        z-index: -101;
    }

    .team-blue-circle {
        position: absolute;
        width: 50%;
        /* left: -420px; */
        left: -40vw;
        transform: rotate(282deg);
        z-index: -100;
    }

    .team-description-bottom {
        display: flex;
        position: absolute;
        right: 0%;
        bottom: 80px;
    }

    .team-description-bottom button {
        display: none;
    }

    .team-description-bottom-social {
        display: flex;
        flex-direction: column;
    }

    .team-description-bottom-social-img-container {
        border-radius: 50%;
        height: 69px;
        width: 69px;
        margin-left: 10px;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .--ln {
        background-color: #2ca7e0;
        border: 1px solid #2ca7e0;
        transition: background-color 0.2s ease-in-out;
    }

    .--git {
        background-color: #000000;
        border: 1px solid #000000;
        transition: background-color 0.2s ease-in-out;
    }

    .team-description-bottom-social-img-container svg {
        width: 35px;
        height: 35px;
        transform: translate(47%, 47%);
    }

    .--ln:hover {
        background-color: white;
    }

    .team-description-bottom-social-img-container:hover .cls-1 {
        fill: #2ca7e0;
    }

    .team-description-bottom-social-img-container:hover .cls-2 {
        fill: #000000;
    }

    .--git:hover {
        background-color: white;
    }

    .cls-1 {
        fill: white;
        transition: fill 0.2s ease-in-out;
    }

    .cls-2 {
        fill: white;
        transition: fill 0.2s ease-in-out;
    }

    .team-member a {
        color: white;
        display: inline-block;
        width: 100%;
        height: 100%;
        line-height: 70px;
        border-radius: 35px;
        overflow: hidden;
    }

    .section-one-bg {
        position: absolute;
        width: 3000px;
        top: -96%;
        left: -30%;
        z-index: -100;
        transform: rotate(7deg);
    }

    .line-overlay {

        z-index: 10;
    }

    .line-main {
        position: absolute;
        left: 0;
    }

    .line-container {
        position: relative;
        width: 230px;
        height: 100px;
    }

    .line-container>div:first-of-type {
        text-align: center;
    }

    .line-container div {

        position: relative;
        top: 40px;
        width: 230px;
    }

    /*.counter {
        display: inline-block;
        width: 100%;
        text-align: center;
        position: relative;
        top: 40px;
    }*/

    .skills-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .path {
        stroke-dasharray: 230;
        stroke-dashoffset: 230;
        animation: dash 2s linear forwards;

    }

    @keyframes progression {
        from {
            value: 0;
        }
    }

    @keyframes dash {
        from {
            stroke-dashoffset: 230;
        }

        to {
            stroke-dashoffset: 0;
        }
    }

    .outsourcing-about {
        margin-top: 150px !important;
    }

    .outsourcing-about .button {
        margin: 100 auto;
        display: block;
    }

    .mirza {
        object-position: 0px 10px !important;
    }

    @media only screen and (max-width: 1500px) {

        .section-one-bg {
            top: -91%;
            transform: rotate(15deg);
        }
    }



    @media only screen and (max-width: 1400px) {
        .section-one-bg {
            position: absolute;
            width: 2500px;
            top: -74%;
            left: -30%;
        }
    }

    @media only screen and (max-width: 1250px) {
        .section-one-bg {

            left: -44%;

        }
    }

    @media only screen and (max-width: 1024px) {
        .line-container {
            flex-basis: 50%;
            margin-bottom: 80px;
            display: flex;
            /* flex-wrap: wrap; */
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .line-container>div:first-of-type {
            text-align: center;
            position: relative;
            top: 85px;
        }

        .team-member {
            padding-right: 25px;
        }

        .team-description {
            width: 60%;
            margin-top: 25px;
        }

        .team-description .h3-font,
        .team-description .h4-font {
            text-align: center;
        }

        .section-one-bg {
            width: 2000px;
            top: -50%;
            left: -30%;
            transform: rotate(23deg);
        }
    }

    @media only screen and (max-width: 925px) {
        .team-member {
            flex-direction: column;
            padding: 0;
        }

        .team-img-container {
            margin-right: 0;
        }

        .team-description {
            width: 80%;
            min-width: 425px;
            margin-top: 25px;
            position: relative;
        }

        .team-description-bottom {
            right: 0%;
            top: -173px;
        }

        .section-one-bg {
            width: 1500px;
            top: -32%;
            left: -30%;
            transform: rotate(17deg);
        }
    }

    @media only screen and (max-width: 725px) {
        .section-one-bg {
            width: 1500px;
            top: -27%;
        }
    }

    @media only screen and (max-width: 501px) {
        .line-container {
            flex-basis: 100%;
        }

        .section-one-bg {
            width: 1500px;
            top: -22%;
        }
    }

    @media only screen and (max-width: 470px) {
        .team-description-bottom-social {
            flex-direction: row;
        }

        .team-description-bottom {
            position: static;
            justify-content: center;
        }

        .team-description>div:first-of-type {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .team-description {
            min-width: unset;
        }


        .team-blue2 {
            bottom: 30px;
        }

        .team-img {
            margin: 0 auto;
            z-index: 20;
            width: 270px;
            /* position: relative; */
            /* padding-top: 0 !important; */
            /* position: relative; */
            /* padding-top: 0 !important; */
            transform: rotate(0deg);
            clip-path: url(#clipPath);
            /* height: 325px; */
            /* width: 100%; */
            /* display: flex; */
            /* margin: 0 auto; */
            justify-content: baseline;
        }

        .team-img img {
            transform: rotate(0deg);
            object-fit: contain;
            /* position: absolute; */
            top: 0;
            padding-top: 0 !important;
            height: auto;
            /* width: auto; */
            object-position: 0px 0px;
            /* margin: 0 auto; */
            /* display: block; */
        }
    }
</style>
<link href="{{ asset('css/font.css') }}" rel="stylesheet">
@section('content')
<section class="section-one">
    <img class="section-one-bg" src="{{ asset('images/partner/designer-developer-header-bg.svg') }}" alt="header background" />
</section>
<section class="team-member contain">
    <div class="team-img-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
                <clipPath id="clipPath">
                    <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                </clipPath>
            </defs>
        </svg>
        <div class="team-img">
            <img class="profile-image" src="{{ asset('images/team/team-blank.svg') }}" alt="profile picture">
        </div>
        <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2" alt="blue circle">
        <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2" alt="orange circle">
    </div>
    <div class="team-description">


    </div>
</section>
<section class="skills-container contain">

</section>
<section class="outsourcing-about team-description-long contain">

</section>
<script type="module" src="{{ asset('/js/outsourcing_profile.js') }}"></script>
@endsection