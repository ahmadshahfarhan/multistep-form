<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multi-step Form in Laravel 9</title>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }

        .custom-container {
            margin-left: 72px;
            margin-right: 72px;
        }

        .background {
            position: relative;
            overflow: hidden;
        }

        .background::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #111827 70%, #00AFEA 30%);
            transform-origin: top right;
            transform: skewX(-40deg);
            z-index: -1;
        }

        .weigth {
            font-weight: 600;
        }

        .weigth-2 {
            font-weight: 500;
        }
    </style>

</head>

<body>

    <div class="custom-container">
        <div class=" flex justify-between bg-white py-[33px]">
            <img src="{{ asset('static/website/images/logo.png') }}" alt="">
            <div class=" flex gap-5 items-center">
                <div>
                    <img src=" {{ asset('static/website/images/search.png') }}" alt="">
                </div>
                <div class=" flex gap-2 items-center px-3 py-3 border-[1px] border-[#E5E7EB] rounded-xl">
                    <img src=" {{ asset('static/website/images/user.png') }}" alt="">
                    <h1 class="text-[#1F2937] text-[15px] font-semibold">Login</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="background relative h-[160px]">
        <div class=" flex items-center">
            <h2 class="text-[#FFFFFF] text-[28px] weigth w-[787px] mt-10 ml-[72px] titan-one-regular">Check Your
                Eligibility For
                Government
                Solar Incentives
                & No-Net-Cost Solar</h2>
            <img class="absolute right-0 top-0" src=" {{ asset('static/website/images/solar.png') }}" alt="">
        </div>
    </div>

    <div class="mt-[50px] custom-container">
        <div class="">
            <div class="bg-[#00AFEA14]  py-2 px-3 rounded-[100px] w-[113px] justify-center mx-auto">
                <h2 class="text-[#00AFEA] font-semibold text-center">Question 1</h2>
            </div>
            <h2 class=" text-black text-[32px] weigth text-center mt-4">What's your home address? *</h2>

            <div class="progress-bar flex gap-1 items-center mx-auto justify-center mt-6">
                <div class=" bg-[#2563EB]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
                <div class=" bg-[#F3F4F6]  w-[70.15px] h-[6px] rounded"></div>
            </div>
            <h2 class="text-gray-300 mt-6 mb-[48px] text-center">
                Select your best option.
            </h2>
            <div class=" mx-auto justify-center flex gap-[32px]">
                <div class=" bg-white border-[1px] border-[#2563EB] rounded-[24px] py-[32px] px-[64px] inline-block">
                    <img src=" {{ asset('static/website/images/fom-1.png') }}" alt="">
                    <div class="mx-auto justify-center items-center flex gap-1 mt-[24px]">
                        <input class="" type="radio">
                        <h2 class="text-[#1F2937] text-[16px] weigth-2"> Yes, I do</h2>
                    </div>
                </div>
                <div
                    class=" bg-white border-[1px] hover:border-[#2563EB] rounded-[24px] py-[32px] px-[64px] inline-block">
                    <img src=" {{ asset('static/website/images/form-2.png') }}" alt="">
                    <div class="mx-auto justify-center flex items-center gap-1 mt-[24px]">
                        <input class="" type="radio">
                        <h2 class="text-[#1F2937] text-[16px] weigth-2"> Yes, I do</h2>
                    </div>
                </div>
            </div>
            <div class="mt-[60px] mx-auto justify-center flex gap-5">
                <button class=" text-[#1F2937] text-[17px] weigth"><i class="fas fa-arrow-left"></i> PREVOUS</button>
                <button class=" text-white bg-[#00AFEA] p-3 rounded-lg text-[17px] weigth">NEXT <i
                        class="fas fa-arrow-right text-sm font-weight"></i></button>
            </div>
            <div class=" mt-[150px]">
                <h2 class="text-black text-[28px] text-center" style="font-weight: 700;">Why Use Solar Selector?</h2>
                <div class=" mt-[80px] flex flex-wrap gap-[32px] justify-center">
                    <div class=" bg-white w-[410.67px] p-4">
                        <img src=" {{ asset('static/website/images/Link.png') }}" alt="">
                        <h2 class=" mt-4 text-[#1F2937] text-[18px]" style="font-weight: 700;">Access Solar Incentives
                        </h2>
                        <p class=" mt-1 text-gray-400 text-[16px]">In less than 60 seconds you'll find out if you
                            qualify for solar incentives up
                            to $3,700.</p>
                    </div>
                    <div class=" bg-white w-[410.67px] p-4">
                        <img src=" {{ asset('static/website/images/Link.png') }}" alt="">
                        <h2 class=" mt-4 text-[#1F2937] text-[18px]" style="font-weight: 700;">Access Solar Incentives
                        </h2>
                        <p class=" mt-1 text-gray-400 text-[16px]">In less than 60 seconds you'll find out if you
                            qualify for solar incentives up
                            to $3,700.</p>
                    </div>
                    <div class=" bg-white w-[410.67px] p-4">
                        <img src=" {{ asset('static/website/images/Link.png') }}" alt="">
                        <h2 class=" mt-4 text-[#1F2937] text-[18px]" style="font-weight: 700;">Access Solar Incentives
                        </h2>
                        <p class=" mt-1 text-gray-400 text-[16px]">In less than 60 seconds you'll find out if you
                            qualify for solar incentives up
                            to $3,700.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class=" bg-[#111827] h-[376px]">
        <div class="custom-container flex flex-col justify-between mt-[80px] mx-auto lg:flex-row ">
            <span class="mt-[80px] text-[#FFFFFF] text-XL font-semibold custom-container w-[200px]">AUSTRALIAN GREEN POWER SOLUTION</span>
            <div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-4 mt-[80px]">
                <div class="space-y-[12px]">
                    <h3 class="text-[#F3F4F6] text-[16px]" style="font-weight: 600;">Product</h3>
                    <ul class="space-y-[12px]">
                        <li>
                            <a class="text-[#9CA3AF] text-[16px]" style=" font-weight:400;" rel="noopener noreferrer"
                                href="#">Features</a>
                        </li>
                        <li>
                            <a class="text-[#9CA3AF] text-[16px]" style=" font-weight:400;" rel="noopener noreferrer"
                                href="#">Why Use Solar Selector?</a>
                        </li>
                    </ul>
                </div>
                <div class=" flex items-center gap-20 justify-betweenga">
                    <div class="space-y-[12px]">
                        <h3 class="text-[#F3F4F6] text-[16px]" style="font-weight: 600;">Company</h3>
                        <ul class="space-y-[12px]">
                            <li>
                                <a class="text-[#9CA3AF] text-[16px]" style=" font-weight:400;"
                                    rel="noopener noreferrer" href="#">About us</a>
                            </li>
                            <li>
                                <a class="text-[#9CA3AF] text-[16px]" style=" font-weight:400;"
                                    rel="noopener noreferrer" href="#">Blog</a>
                            </li>
                            <li class=" flex gap-1">
                                <a class="text-[#9CA3AF] text-[16px]" style=" font-weight:400;"
                                    rel="noopener noreferrer" href="#">Careers </a>
                                    <button class="text-white bg-[#1D4ED8] rounded-[8px] inline-block relative w-20 p-[1px]">We're hiring</button>
                            </li>
                            <li>
                                <a class="text-[#9CA3AF] text-[16px]" style=" font-weight:400;"
                                    rel="noopener noreferrer" href="#">Customers</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" justify-end">
                        <h1 class="text-[#F3F4F6] text-[16px]" style="font-weight: 600;">Stay up to date</h1>
                        <div class=" flex items-center bg-white p-1 rounded-[8px] mt-[16px]">
                            <input placeholder="Enter your email" class="w-[381.47px] h-[46px] border-none outline-none p-1" type="email">
                            <button class=" bg-[#2563EB] text-white font-semibold px-[12.5px] py-[13px] rounded-[8px]">Subscribe</button>
                        </div>
                        <h1 class="text-[#9CA3AF] text-[14px] mt-3" style="font-weight: 400;">Lorem ipsum dolor amet.</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-container flex items-center justify-between mt-[80px]">
            <h1 class=" text-[#9CA3AF] text-[14px]" style="font-weight: 400;">© 2022 agps. All rights reserved.</h1>
            <div class=" flex gap-[28px] items-center text-white">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-google"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-github"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </footer>

    {{-- tailwind --}}
    {{-- <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-9/12">
                <div class="card px-5 py-3 mt-5 shadow">
                    <h1 class="text-danger text-center mt-3 mb-4">Multi-step Form</h1>

                    <div class="flex justify-between my-3">
                        <label class="nav-link shadow-sm step0 border ml-2 ">Step One</label>
                        <label class="nav-link shadow-sm step1 border ml-2 ">Step Two</label>
                        <label class="nav-link shadow-sm step2 border ml-2 ">Step Three</label>
                    </div>

                    <form action="/post" method="post" class="employee-form">
                        @csrf
                        <div class="form-section">
                            <label for="">Name:</label>
                            <input type="text" class="form-control mb-3" name="name" required>
                            <label for="">Last Name:</label>
                            <input type="text" class="form-control mb-3" name="last_name" required>
                        </div>
                        <div class="form-section">
                            <label for="">E-mail:</label>
                            <input type="email" class="form-control mb-3" name="email" required>
                            <label for="">Phone:</label>
                            <input type="tel" class="form-control mb-3" name="phone" required>
                        </div>
                        <div class="form-section">
                            <label for="">Address:</label>
                            <textarea name="address" class="form-control mb-3" cols="30" rows="5" required></textarea>
                        </div>
                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                            <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div> --}}

    {{-- boostrap --}}
    {{-- <div class="container-fluid  ">
        <div class="row justify-content-md-center">
            <div class="col-md-9 ">
                <div class="card px-5 py-3 mt-5 shadow">
                    <h1 class="text-danger text-center mt-3 mb-4">Multi-step Form</h1>

                    <div class="nav nav-fill my-3">
                        <label class="nav-link shadow-sm step0    border ml-2 ">Step One</label>
                        <label class="nav-link shadow-sm step1   border ml-2 ">Step Two</label>
                        <label class="nav-link shadow-sm step2   border ml-2 ">Step Three</label>
                    </div>

                    <form action="/post" method="post" class="employee-form">
                        @csrf
                        <div class="form-section">
                            <label for="">Name:</label>
                            <input type="text" class="form-control mb-3" name="name" required>
                            <label for="">Last Name:</label>
                            <input type="text" class="form-control mb-3" name="last_name" required>
                        </div>
                        <div class="form-section">
                            <label for="">E-mail:</label>
                            <input type="email" class="form-control mb-3" name="email" required>
                            <label for="">Phone:</label>
                            <input type="tel" class="form-control mb-3" name="phone" required>
                        </div>
                        <div class="form-section">
                            <label for="">Address:</label>
                            <textarea name="address" class="form-control mb-3" cols="30" rows="5" required></textarea>
                        </div>
                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                            <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div> --}}

    <script>
        $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {

                $sections.removeClass('current').eq(index).addClass('current');

                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);


                const step = document.querySelector('.step' + index);
                step.style.backgroundColor = "#17a2b8";
                step.style.color = "white";



            }

            function curIndex() {

                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });

            $('.form-navigation .next').click(function() {
                $('.employee-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });

            });

            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });


            navigateTo(0);



        });
    </script>



</body>

</html>
