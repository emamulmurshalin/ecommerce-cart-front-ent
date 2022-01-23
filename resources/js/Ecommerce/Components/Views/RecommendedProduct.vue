<template>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product1.jpg')" class="image-size-modify">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product2.jpg')" class="image-size-modify">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product3.jpg')" class="image-size-modify">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product4.jpg')" class="image-size-modify">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product1.jpg')" class="image-size-modify">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product1.jpg')" class="image-size-modify">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product2.jpg')" class="image-size-modify">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product4.jpg')" class="image-size-modify">
        </div>
    </div>
</template>

<script>
export default {
    name: "RecommendedProduct",
    data(){
        return{

        }
    },
    methods:{
        showImage(productName){
            return `/ecommerce/images/${productName}`;
        }
    }
}
</script>
