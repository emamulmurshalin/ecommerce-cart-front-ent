<template>
    <div class="row row-modify">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product1.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product2.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product3.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product4.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product1.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product2.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product2.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 grid-padding">
            <img :src="showImage('product4.jpg')" class="image-size-modify">
            <div class="row row-modify" style="margin: 6px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag">
                    <span>Test</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-tag" style="background: #2E4B71;">
                    <span style="color: white;">Test1</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-title">Product name</span>
            </div>
            <div class="row row-modify" style="margin-left: 2px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <span class="product-unit">500g/3,500$</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <span class="product-unit">10$/200g</span>
                </div>
            </div>
            <div style="margin: 6px;">
                <span class="product-description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam velit dolor, sollicitudin ac purus id, semper
                    posuere libero. Aliquam a neque cursus, aliquet metus in, lobortis
                    turpis. Suspendisse egestas orci augue. Cras eleifend magna nec
                    nibh pharetra, quis efficitur orci aliquam. Nullam ullamcorper,
                    turpis in gravida auctor, felis augue volutpat augue.
                </span>
            </div>
            <div class="row row-modify product-cart">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-minus-square"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
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
