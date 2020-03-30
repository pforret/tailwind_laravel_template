@php
if(isset($image) AND $image){
    $imgurl="/images/$image";
} else {
    $imgurl="/images/undraw_friends_online_klj6.svg";
}
@endphp
    <div class="container max-w-5xl mx-auto m-8">
        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">{{$title}}</h3>
                <p class="text-gray-600 mb-8"><?php  echo $body ?></p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
                <img src="<?= $imgurl ?>">
            </div>
        </div>
    </div>
</section>
