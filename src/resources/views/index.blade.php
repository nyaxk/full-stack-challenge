<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{getenv('APP_NAME')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('images/logo.svg')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="flex w-2/4 p-12 flex items-center justify-center mx-auto">
    <a href="" class="font-rufina text-xl font-extrabold text-customText mr-56">
        <img src="{{asset('images/logo.svg')}}" alt="logo" class="ml-2">
        Leospa
    </a>
    <a href="#" class="font-roboto font-bold text-customText mr-10">HOME</a>
    <a href="#" class="font-roboto font-bold text-customText mr-10">ABOUT</a>
    <a href="#" class="font-roboto font-bold text-customText mr-10">FEATURE</a>
    <a href="#" class="font-roboto font-bold text-customText mr-10">SERVICE</a>
    <a href="#" class="font-roboto font-bold text-customText mr-10">CONTACT</a>
</div>
<div class="w-min-screen h-auto mt-36 mb-48">
    <div class="w-2/4 p-12 justify-start mx-auto h-auto">
        <div class="w-3/4">
            <h1 class="mr-96 font-rufina font-bold text-customPink mb-10">SPA & BEAUTY CENTER</h1>
            <p class="font-rufina font-extrabold text-6xl mb-6">Beauty and success starts here.</p>
            <p class="font-roboto font-lg mb-6 space-x-8">Together creeping heaven upon third dominion be upon won't
                darkness rule
                behold it created good saw after she'd Our set living. </p>
            <div class="flex text-center justify-start items-center">
                <button class="bg-customPink text-white p-4 font-roboto text-sm font-bold w-40 mr-8">
                    RESERVE NOW
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
                <button class="w-12 h-12 bg-customPinkA rounded-full text-customPink text-center mr-4">
                    <i class="fas fa-play text-center"></i>
                </button>
                <p>Watch our story</p>
            </div>
        </div>
    </div>
</div>
<div class="flex w-min-screen justify-center items-center mx-auto mb-20">
    <div class="text-center mx-auto break-all w-3/4">
        <img src="{{asset('images/logo.svg')}}" alt="logo" class="mx-auto text-center flex-wrap w-20"/>
        <p class="flex-col text-gray-500 mt-6 font-bold font-roboto">ABOUT OUR SPA CENTER</p>
        <p class="mt-12 mb-12 font-rufina text-4xl">Come and you will be Inspired!</p>
        <div class="w-4/6 text-center justify-center items-center mx-auto mb-20">
            <p class="break-all text-gray-500">It’s the end of summer the sweltering heat makes human sweat in the night
                and makes the
                plants and trees wilt even in the moonlit nights.
                The eastern wind breeze brings an eerie feeling, that the monsoon clouds are soon coming, there is a
                strange silence in the ears, the sky gets darker and darker
                The rain starts coming down,
                slowly at first, but heavy little later,
                the gutters and drainages suddenly fill up,
                and water starts flowing down the streets.
            </p>
        </div>
        <button class="bg-customPink p-4 w-48 text-white rounded-3xl font-roboto">READ MORE</button>
    </div>
</div>
<div class="flex w-min-screen h-auto mb-20 justify-center items-center">
    <img src="{{asset('images/img-1.svg')}}" class="mr-2 object-scale-down w-auto" alt="img-1">
    <img src="{{asset('images/img-2.svg')}}" class="mr-2 object-scale-down w-auto" alt="img-2">
    <img src="{{asset('images/img-3.svg')}}" class="mr-2 object-scale-down w-auto" alt="img-3">
    <img src="{{asset('images/img-4.svg')}}" class="object-scale-down w-auto" alt="img-4">
</div>
<div class="flex flex-col w-min-screen h-screen mb-20">
    <div class="text-center mx-auto break-all w-3/4">
        <h1 class="font-rufina text-3xl text-customText font-bold mb-10">Popular Procedures</h1>
        <div class="w-4/6 text-center justify-center items-center mx-auto mb-20">
            <p class="break-all text-gray-500 font-roboto">
                To doesn't his appear replenish together called he of mad place won't wherein blessed second every
                wherein were meat kind wherein and martcin
            </p>
        </div>
    </div>
    <div class="flex mx-auto h-screen">
        <div class="w-80 h-3/4 shadow p-4 mr-4 justify-center items-center text-center hover:shadow-xl transition-all">
            <img src="{{asset('images/img-5.svg')}}" alt="img-5">
            <p class="font-rufina font-bold mt-6">Massage Therapy</p>
            <p class="font-roboto text-gray-500 mt-6">
                Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters
                firmament place which.
            </p>
            <button
                class="bg-gray-800 hover:bg-customPink transition-all p-2 font-medium w-44 text-white rounded-3xl font-roboto mt-12 shadow">
                READ MORE
            </button>
        </div>
        <div class="w-80 h-3/4 shadow p-4 mr-4 justify-center items-center text-center hover:shadow-xl transition-all">
            <img src="{{asset('images/img-6.svg')}}" alt="img-6">
            <p class="font-rufina font-bold mt-6">Beauty Care</p>
            <p class="font-roboto text-gray-500 mt-6">
                Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters
                firmament place which.
            </p>
            <button
                class="bg-gray-800 hover:bg-customPink transition-all p-2 font-medium w-44 text-white rounded-3xl font-roboto mt-12 shadow">
                READ MORE
            </button>
        </div>
        <div class="w-80 h-3/4 shadow p-4 mr-4 justify-center items-center text-center hover:shadow-xl transition-all">
            <img src="{{asset('images/img-7.svg')}}" alt="img-7">
            <p class="font-rufina font-bold mt-6">Executive Reflexology</p>
            <p class="font-roboto text-gray-500 mt-6">
                Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters
                firmament place which.
            </p>
            <button
                class="bg-gray-800 hover:bg-customPink transition-all p-2 font-medium w-44 text-white rounded-3xl font-roboto mt-12 shadow">
                READ MORE
            </button>
        </div>
    </div>
</div>
<div class="flex flex-col w-min-screen h-auto mb-20 bg-customPinkB">
    <div class="text-center mx-auto break-all w-3/4 mb-16">
        <img src="{{asset('images/quote.svg')}}" class="mt-28 mx-auto" alt="quote">
        <div class="w-4/6 mx-auto mt-12">
            <p class="break-all text-gray-500">
                First i beast be fruitful open you tree all Won't can't likeness and you're have whales creature seed to
                two grass life blessed you meat shall you winged under from their there he That you're one called gather
                make much red wherein set fourth green bearing fifth replenish given she had.
            </p>
            <img src="{{asset('images/img-8.svg')}}" class="w-20 mt-28 mx-auto rounded-full" alt="img-8">
            <p class="break-all text-gray-500 mt-6">
                <b>Jack Marsh</b>, Executive
            </p>
        </div>
    </div>
</div>
<div class="flex flex-col w-min-screen h-screen mb-20">
    <div class="text-center mx-auto break-all w-3/4">
        <h1 class="font-rufina text-3xl text-customText font-bold mb-10">Experienced Team</h1>
        <div class="w-4/6 text-center justify-center items-center mx-auto mb-20">
            <p class="break-all text-gray-500 font-roboto">
                To doesn't his appear replenish together called he of mad place won't wherein blessed second every
                wherein were meat kind wherein and martcin
            </p>
        </div>
    </div>
    <div class="flex mx-auto h-screen">
        <div class="w-80 shadow-sm h-2/4 p-4 mr-4 justify-center items-center text-center">
            <img src="{{asset('images/img-9.svg')}}" alt="img-9">
            <p class="font-rufina font-bold mt-6">Joseph Austin</p>
            <p class="font-roboto text-gray-500 mt-6">
                Thai Message
            </p>
        </div>
        <div class="w-80 h-auto p-6 mr-4 justify-center items-center text-center transition-all">
            <div class="relative items-center justify-center mb-4">
                <img src="{{asset('images/img-10.svg')}}" alt="img-10" class="h-96 object-cover">
                <div class="absolute shadow bg-white w-56 top-80 p-4 left-6">
                    <p class="font-rufina font-bold">David Hannan</p>
                    <p class="font-roboto text-gray-500 mt-2">
                        Thai Message
                    </p>
                    <div class="flex mt-8 items-center justify-center">
                        <button
                            class="w-8 h-8 bg-white text-black hover:text-white hover:border-customPink hover:text-white hover:bg-customPink border-black border-2 rounded-full text-center mr-4">
                            <i class="fab fa-facebook-f mx-auto"></i>
                        </button>
                        <button
                            class="w-8 h-8 bg-white text-black hover:text-white hover:border-customPink hover:text-white hover:bg-customPink border-black border-2 rounded-full text-center mr-4">
                            <i class="fab fa-twitter mx-auto"></i>
                        </button>
                        <button
                            class="w-8 h-8 bg-white text-black hover:text-white hover:border-customPink hover:text-white hover:bg-customPink border-black border-2 rounded-full text-center mr-4">
                            <i class="fab fa-google-plus-g mx-auto"></i>
                        </button>
                        <button
                            class="w-8 h-8 bg-white text-black hover:text-white hover:border-customPink hover:text-white hover:bg-customPink border-black border-2 rounded-full text-center mr-4">
                            <i class="fab fa-instagram mx-auto"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-80 shadow-sm h-2/4 p-4 mr-4 justify-center items-center text-center">
            <div class="relative items-center justify-center mb-4">
                <img src="{{asset('images/img-11.svg')}}" alt="img-11" class="h-96 object-cover">
                <div class="absolute bg-white w-64 top-80 p-4 left-4">
                    <p class="font-rufina font-bold">David Hannan</p>
                    <p class="font-roboto text-gray-500 mt-2">
                        Thai Message
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex bg-customPinkB flex-col w-min-screen h-auto mb-28">
    <div class="flex justify-start">
        <img src="{{asset('images/img-12.svg')}}" alt="img-12">
        <div class="p-20 justify-center items-center mx-auto">
            <input class="mr-4 w-80 h-12 outline-none bg-customPinkB border-b-2 border-gray-200" placeholder="NAME">
            <input class="w-80 h-12 outline-none bg-customPinkB border-b-2 border-gray-200" placeholder="EMAIL ADDRESS">
            <div class="mt-4 justify-center items-center mx-auto">
                <select class="mr-4 w-80 h-12 outline-none bg-customPinkB border-b-2 border-gray-200 text-gray-400">
                    <option selected>SELECT SERVICE</option>
                </select>
                <input class="w-80 h-12 outline-none bg-customPinkB border-b-2 border-gray-200"
                       placeholder="PHONE NUMBER">
            </div>
            <div class="mt-4 justify-center items-center mx-auto">
                <input type="date"
                       class="mr-4 w-80 h-12 outline-none bg-customPinkB border-b-2 border-gray-200 text-gray-400"
                       placeholder="DATE">
                <input type="time"
                       class="w-80 h-12 outline-none bg-customPinkB border-b-2 border-gray-200 text-gray-400"
                       placeholder="TIME">
            </div>
            <input class="mt-36 w-full h-12 outline-none bg-customPinkB border-b-2 border-gray-200"
                   placeholder="YOUR NOTES">
            <button class="bg-customPink p-4 w-72 text-white rounded-3xl font-roboto mt-20">Make an Appointment</button>
        </div>

    </div>
</div>
<div class="flex flex-col w-min-screen h-screen mb-20">
    <div class="text-center mx-auto break-all w-3/4">
        <h1 class="font-rufina text-3xl text-customText font-bold mb-10">Latest From Blog</h1>
        <div class="w-4/6 text-center justify-center items-center mx-auto mb-20">
            <p class="break-all text-gray-500 font-roboto">
                To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin
            </p>
        </div>
    </div>
    <div class="flex mx-auto h-screen">
        <div class="w-80 h-5/6 shadow p-4 mr-4 justify-center items-center text-center hover:shadow-xl transition-all">
            <img src="{{asset('images/null.svg')}}" alt="null">
            <p class="font-roboto text-gray-500 mt-6">
                Relaxation  |  july 03, 2019
            </p>
            <p class="font-rufina font-bold mt-6"> Had seed herb grass mids</p>
            <p class="font-roboto text-gray-500 mt-6">
                She'd yielding seas green appear unto worne seas field most come mede do bad
            </p>
            <button
                class="bg-gray-800 hover:bg-customPink transition-all p-2 font-medium w-44 text-white rounded-3xl font-roboto mt-12 shadow">
                READ MORE
            </button>
        </div>
        <div class="w-80 h-5/6 shadow p-4 mr-4 justify-center items-center text-center hover:shadow-xl transition-all">
            <img src="{{asset('images/null.svg')}}" alt="null">
            <p class="font-roboto text-gray-500 mt-6">
                Relaxation  |  july 03, 2019
            </p>
            <p class="font-rufina font-bold mt-6">Divid image unto creeping </p>
            <p class="font-roboto text-gray-500 mt-6">
                She'd yielding seas green appear unto worne seas field most come mede do bad
            </p>
            <button
                class="bg-gray-800 hover:bg-customPink transition-all p-2 font-medium w-44 text-white rounded-3xl font-roboto mt-12 shadow">
                READ MORE
            </button>
        </div>
        <div class="w-80 h-5/6 shadow p-4 mr-4 justify-center items-center text-center hover:shadow-xl transition-all">
            <img src="{{asset('images/null.svg')}}" alt="null">
            <p class="font-roboto text-gray-500 mt-6">
                Relaxation  |  july 03, 2019
            </p>
            <p class="font-rufina font-bold mt-6"> Had seed herb grass mids</p>
            <p class="font-roboto text-gray-500 mt-6">
                She'd yielding seas green appear unto worne seas field most come mede do bad
            </p>
            <button
                class="bg-gray-800 hover:bg-customPink transition-all p-2 font-medium w-44 text-white rounded-3xl font-roboto mt-12 shadow">
                READ MORE
            </button>
        </div>
    </div>
</div>
<div class="flex flex-col w-min-screen h-auto mb-28">
    <div class="text-center mx-auto break-all w-3/4">
        <h1 class="font-rufina text-3xl text-customText font-bold mb-10">Get In Touch</h1>
        <div class="w-4/6 text-center justify-center items-center mx-auto mb-20">
            <p class="break-all text-gray-500 font-roboto">
                To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin
            </p>
        </div>
    </div>
    <div class="flex mx-auto h-screen w-3/4">
        <button
            class="w-8 h-8 bg-customPink text-white rounded-full text-center mr-4">
            <i class="fas fa-map-marked-alt"></i>
        </button>
    </div>
</div>
</body>
</html>
