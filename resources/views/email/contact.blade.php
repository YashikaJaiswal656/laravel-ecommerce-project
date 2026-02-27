<x-app-layout>
@section('title','contact')
@section('content')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">

<div class="container-bg">
    <div class="content">

        <h1>Contact Us  </h1>
        <p>Awesome, clean & creative HTML5 Template</p>
    </div>
</div>


<div class="dotted"></div>
<div class="collection">
    <div class="cont_coll_two">
        <div class="explore_one">
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56006.58210538795!2d77.24611871949652!3d28.67733826351189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb0f509c976f%3A0x9ec1dbe6a1f4fd3c!2sShahdara%2C%20Delhi!5e0!3m2!1sen!2sin!4v1769582501634!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="explore_one">
            <h2>Say Hello. Don't Be Shy!
            </h2>
            <p>Details to details is what makes Hexashop different from the other themes.
            </p>
            <form action="{{route('contact_send')}}" method="post">
                @csrf
            <div class="input">
                <input type="text" placeholder="Your Name"name="name">
                <input type="email" placeholder="Your Email Address" name="email">
            </div>
            <textarea id="" cols="71" rows="10" placeholder="Your message" name="message"></textarea>
            <br>
        <button>submit</button>
            </form>
        </div>
    </div>
</div>

<div class="dotted"></div>
<div class="collection">
    <div class="cont_coll_two">
        <div class="explore_one">
            <h2>
                By Subscribing To Our Newsletter You Can Get 30% Off
            </h2>
            <p>Details to details is what makes Hexashop different from the other themes.

            </p>
            <div class="input">
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email Address">
                <div class="icon"><i class="fa-solid fa-paper-plane"></i></div>
            </div>
        </div>
        <div class="explore_three">
            <div class="social">
                <h2>Store Location:</h2>
                <p>Sunny Isles Beach, FL 33160, United States</p>
            </div>
            <div class="social">
                <h2>Work Hours:</h2>
                <p>07:30 AM - 9:30 PM Daily</p>
            </div>
            <div class="social">
                <h2>Phone:</h2>
                <p>8448260587</p>
            </div>

            <div class="social">
                <h2>Email:</h2>
                <p>jaiswalyashika79@gmail.com</p>
            </div>
            <div class="social">
                <h2>Office Location:</h2>
                <p>Delhi</p>
            </div>
            <div class="social">
                <h2>Social Media:</h2>
                <p>Facebook, Instagram, Behance, Linkedin</p>
            </div>
        </div>
    </div>
</div>

</x-app-layout>