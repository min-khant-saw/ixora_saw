<x-home-header title="Categorys" />

<div class="w-full flex justify-center items-center mt-2 category-container px-2" style="gap: 15px;">


    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Fashion</h1>
            <a href="{{ route('fashion') }}" class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="https://scontent-sin6-1.xx.fbcdn.net/v/t39.30808-6/380431180_624168969836494_5725221124143727116_n.jpg?stp=c178.0.1085.1085a_dst-jpg_s851x315&_nc_cat=111&ccb=1-7&_nc_sid=0df3a7&_nc_ohc=lF_u6g7GAG4AX-cXiqu&_nc_ht=scontent-sin6-1.xx&oh=00_AfDYwFsT_2cuCVbGR5omcW9ZCBrcCJSSVUF1ajAA_V6N1w&oe=651E8A6C"
            alt="">
    </div>
    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Accessories</h1>
            <a href="{{ route('accessories') }}"
                class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="https://hips.hearstapps.com/hmg-prod/images/wireless-earbuds-1661183784.jpg?resize=1200:*"
            alt="">
    </div>

    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Home Decors</h1>
            <a href="{{ route('homeDecor') }}"
                class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="https://media.designcafe.com/wp-content/uploads/2022/09/16092055/cheap-room-decor-ideas.jpg"
            alt="">
    </div>

    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Educations</h1>
            <a href="{{ route('homeDecor') }}"
                class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="https://img.freepik.com/premium-photo/school-supplies-education-school-equipment-office-supplies-learning-school-notebook_488220-22051.jpg?w=900"
            alt="">
    </div>


</div>
