@extends('layouts.app')

@section('title', 'Dapatkan Nama Domain .com')

@section('content')

<div class="hero-banner">
    <img src="{{ asset('img/banner.jpg') }}" alt="" class="size-full object-center object-cover">

    <div class="top-1/3 right-0 left-0 absolute pl-36">
        <h1 class="flex flex-col font-serif text-white">
            <span class="font-semibold text-4xl">Dimana Dunia</span>
            <span class="font-bold text-6xl">Menemukanmu</span>
        </h1>
    </div>
</div>

<div class="py-10">

    <h2 class="font-serif font-bold text-blue-primary text-4xl text-center">Bagaimana menggunakan .com</h2>

    <div class="mx-auto mt-5 max-w-[810px] container">
        <!-- Slider main container -->
        <div class="swiper swiper-container online_bersama_how_to_use_domain">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @for ($i = 1; $i <= 3; $i++)
                    <div class="w-[400px] aspect-video swiper-slide">
                        <div class="rounded-2xl size-full overflow-hidden">
                            <img src="{{ asset('img/slide00'.$i.'.png') }}" alt="" class="size-full object-center object-cover">
                        </div>
                    </div>
                @endfor
            </div>
        </div>


    </div>

</div>

<!-- Not just a domain , a declartion -->
<div class="py-10">

    <h2 class="font-serif font-bold text-blue-primary text-4xl text-center">Section 2</h2>

</div>

<!-- Why Com -->
<div class="py-10">

    <h2 class="font-serif font-bold text-blue-primary text-4xl text-center">Section 3</h2>

</div>

<!-- What makes the Com, the standar -->
<div class="py-10">

    <h2 class="font-serif font-bold text-blue-primary text-4xl text-center">Section 4</h2>

</div>

<!-- FAQ -->
<div class="py-10">

    <h2 class="font-serif font-bold text-blue-primary text-4xl text-center">Frequently Asked Questions</h2>

    <div class="mx-auto mt-5 container">


        <div class="faq-wrapper">
            <div class="faq-items" x-data="{ open: false }">
                <div class="faq-header">
                    <h4 class="faq-title" @click="open = true">What Is a Domain Name?</h4>
                    <div x-cloak class="faq-action-icon" @click="open = !open">
                        <x-vaadin-plus class="size-full text-blue-primary" x-show="!open"/>
                        <x-vaadin-minus class="size-full text-blue-primary" x-show="open"/>
                    </div>
                </div>
                <div class="faq-content" x-show="open" x-transition x-cloak>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus minus animi illo quod inventore praesentium quam soluta voluptates nemo repellat, nulla dolorum blanditiis! Quod placeat, nam dignissimos nostrum at natus cumque labore eligendi consequatur tempore perspiciatis amet, neque possimus maiores minus autem blanditiis beatae vitae commodi recusandae dolore? Explicabo et esse, ipsa minus blanditiis distinctio nobis numquam atque aliquid cupiditate hic molestiae? Omnis, sunt eaque rem unde enim voluptatum corrupti reiciendis porro animi quae saepe. Doloremque repellendus rem dolore dolorem beatae nulla obcaecati eveniet voluptates tempora temporibus doloribus, possimus tenetur laboriosam! Excepturi quas fugiat sapiente harum quasi! Labore numquam esse nobis facere, minima molestias aliquid, explicabo expedita quaerat voluptatem dolorem cum quia, praesentium iusto repellendus odio quam dolore odit vel alias deleniti tempore cumque eveniet? Accusamus facere amet quod inventore corporis voluptatibus reprehenderit magni voluptates alias itaque fugiat tempore quasi impedit iste ipsa sequi quam dignissimos, quidem odio quaerat incidunt.</p>
                </div>
            </div>
            <div class="faq-items" x-data="{ open: false }">
                <div class="faq-header">
                    <h4 class="faq-title" @click="open = true">What's better - .com or online?</h4>
                    <div x-cloak class="faq-action-icon" @click="open = !open">
                        <x-vaadin-plus class="size-full text-blue-primary" x-show="!open"/>
                        <x-vaadin-minus class="size-full text-blue-primary" x-show="open"/>
                    </div>
                </div>
                <div class="faq-content" x-show="open" x-transition x-cloak>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus minus animi illo quod inventore praesentium quam soluta voluptates nemo repellat, nulla dolorum blanditiis! Quod placeat, nam dignissimos nostrum at natus cumque labore eligendi consequatur tempore perspiciatis amet, neque possimus maiores minus autem blanditiis beatae vitae commodi recusandae dolore? Explicabo et esse, ipsa minus blanditiis distinctio nobis numquam atque aliquid cupiditate hic molestiae? Omnis, sunt eaque rem unde enim voluptatum corrupti reiciendis porro animi quae saepe. Doloremque repellendus rem dolore dolorem beatae nulla obcaecati eveniet voluptates tempora temporibus doloribus, possimus tenetur laboriosam! Excepturi quas fugiat sapiente harum quasi! Labore numquam esse nobis facere, minima molestias aliquid, explicabo expedita quaerat voluptatem dolorem cum quia, praesentium iusto repellendus odio quam dolore odit vel alias deleniti tempore cumque eveniet? Accusamus facere amet quod inventore corporis voluptatibus reprehenderit magni voluptates alias itaque fugiat tempore quasi impedit iste ipsa sequi quam dignissimos, quidem odio quaerat incidunt.</p>
                </div>
            </div>
            <div class="faq-items" x-data="{ open: false }">
                <div class="faq-header">
                    <h4 class="faq-title" @click="open = true">When I buy a domain name, is it mine forever?</h4>
                    <div x-cloak class="faq-action-icon" @click="open = !open">
                        <x-vaadin-plus class="size-full text-blue-primary" x-show="!open"/>
                        <x-vaadin-minus class="size-full text-blue-primary" x-show="open"/>
                    </div>
                </div>
                <div class="faq-content" x-show="open" x-transition x-cloak>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus minus animi illo quod inventore praesentium quam soluta voluptates nemo repellat, nulla dolorum blanditiis! Quod placeat, nam dignissimos nostrum at natus cumque labore eligendi consequatur tempore perspiciatis amet, neque possimus maiores minus autem blanditiis beatae vitae commodi recusandae dolore? Explicabo et esse, ipsa minus blanditiis distinctio nobis numquam atque aliquid cupiditate hic molestiae? Omnis, sunt eaque rem unde enim voluptatum corrupti reiciendis porro animi quae saepe. Doloremque repellendus rem dolore dolorem beatae nulla obcaecati eveniet voluptates tempora temporibus doloribus, possimus tenetur laboriosam! Excepturi quas fugiat sapiente harum quasi! Labore numquam esse nobis facere, minima molestias aliquid, explicabo expedita quaerat voluptatem dolorem cum quia, praesentium iusto repellendus odio quam dolore odit vel alias deleniti tempore cumque eveniet? Accusamus facere amet quod inventore corporis voluptatibus reprehenderit magni voluptates alias itaque fugiat tempore quasi impedit iste ipsa sequi quam dignissimos, quidem odio quaerat incidunt.</p>
                </div>
            </div>
            <div class="faq-items" x-data="{ open: false }">
                <div class="faq-header">
                    <h4 class="faq-title" @click="open = true">How do I get a .com domain name?</h4>
                    <div x-cloak class="faq-action-icon" @click="open = !open">
                        <x-vaadin-plus class="size-full text-blue-primary" x-show="!open"/>
                        <x-vaadin-minus class="size-full text-blue-primary" x-show="open"/>
                    </div>
                </div>
                <div class="faq-content" x-show="open" x-transition x-cloak>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus minus animi illo quod inventore praesentium quam soluta voluptates nemo repellat, nulla dolorum blanditiis! Quod placeat, nam dignissimos nostrum at natus cumque labore eligendi consequatur tempore perspiciatis amet, neque possimus maiores minus autem blanditiis beatae vitae commodi recusandae dolore? Explicabo et esse, ipsa minus blanditiis distinctio nobis numquam atque aliquid cupiditate hic molestiae? Omnis, sunt eaque rem unde enim voluptatum corrupti reiciendis porro animi quae saepe. Doloremque repellendus rem dolore dolorem beatae nulla obcaecati eveniet voluptates tempora temporibus doloribus, possimus tenetur laboriosam! Excepturi quas fugiat sapiente harum quasi! Labore numquam esse nobis facere, minima molestias aliquid, explicabo expedita quaerat voluptatem dolorem cum quia, praesentium iusto repellendus odio quam dolore odit vel alias deleniti tempore cumque eveniet? Accusamus facere amet quod inventore corporis voluptatibus reprehenderit magni voluptates alias itaque fugiat tempore quasi impedit iste ipsa sequi quam dignissimos, quidem odio quaerat incidunt.</p>
                </div>
            </div>
            <div class="faq-items" x-data="{ open: false }">
                <div class="faq-header">
                    <h4 class="faq-title" @click="open = true">What are the different ways I can use a domain name?</h4>
                    <div x-cloak class="faq-action-icon" @click="open = !open">
                        <x-vaadin-plus class="size-full text-blue-primary" x-show="!open"/>
                        <x-vaadin-minus class="size-full text-blue-primary" x-show="open"/>
                    </div>
                </div>
                <div class="faq-content" x-show="open" x-transition x-cloak>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus minus animi illo quod inventore praesentium quam soluta voluptates nemo repellat, nulla dolorum blanditiis! Quod placeat, nam dignissimos nostrum at natus cumque labore eligendi consequatur tempore perspiciatis amet, neque possimus maiores minus autem blanditiis beatae vitae commodi recusandae dolore? Explicabo et esse, ipsa minus blanditiis distinctio nobis numquam atque aliquid cupiditate hic molestiae? Omnis, sunt eaque rem unde enim voluptatum corrupti reiciendis porro animi quae saepe. Doloremque repellendus rem dolore dolorem beatae nulla obcaecati eveniet voluptates tempora temporibus doloribus, possimus tenetur laboriosam! Excepturi quas fugiat sapiente harum quasi! Labore numquam esse nobis facere, minima molestias aliquid, explicabo expedita quaerat voluptatem dolorem cum quia, praesentium iusto repellendus odio quam dolore odit vel alias deleniti tempore cumque eveniet? Accusamus facere amet quod inventore corporis voluptatibus reprehenderit magni voluptates alias itaque fugiat tempore quasi impedit iste ipsa sequi quam dignissimos, quidem odio quaerat incidunt.</p>
                </div>
            </div>
            <div class="faq-items" x-data="{ open: false }">
                <div class="faq-header">
                    <h4 class="faq-title" @click="open = true">Why do I need a .com domain name if 1 already have a social media account?</h4>
                    <div x-cloak class="faq-action-icon" @click="open = !open">
                        <x-vaadin-plus class="size-full text-blue-primary" x-show="!open"/>
                        <x-vaadin-minus class="size-full text-blue-primary" x-show="open"/>
                    </div>
                </div>
                <div class="faq-content" x-show="open" x-transition x-cloak>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus minus animi illo quod inventore praesentium quam soluta voluptates nemo repellat, nulla dolorum blanditiis! Quod placeat, nam dignissimos nostrum at natus cumque labore eligendi consequatur tempore perspiciatis amet, neque possimus maiores minus autem blanditiis beatae vitae commodi recusandae dolore? Explicabo et esse, ipsa minus blanditiis distinctio nobis numquam atque aliquid cupiditate hic molestiae? Omnis, sunt eaque rem unde enim voluptatum corrupti reiciendis porro animi quae saepe. Doloremque repellendus rem dolore dolorem beatae nulla obcaecati eveniet voluptates tempora temporibus doloribus, possimus tenetur laboriosam! Excepturi quas fugiat sapiente harum quasi! Labore numquam esse nobis facere, minima molestias aliquid, explicabo expedita quaerat voluptatem dolorem cum quia, praesentium iusto repellendus odio quam dolore odit vel alias deleniti tempore cumque eveniet? Accusamus facere amet quod inventore corporis voluptatibus reprehenderit magni voluptates alias itaque fugiat tempore quasi impedit iste ipsa sequi quam dignissimos, quidem odio quaerat incidunt.</p>
                </div>
            </div>
        </div>


    </div>

</div>




@endsection
