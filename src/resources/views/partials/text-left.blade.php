@php
if(isset($image) AND $image){
    $imgurl="/images/$image";
} else {
    $imgurl="/images/undraw_friends_online_klj6.svg";
}
@endphp
<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <img src="<?= $imgurl ?>">
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">{{$title}}</h3>
                    <p class="text-gray-600 mb-8"><?php  echo $body ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
