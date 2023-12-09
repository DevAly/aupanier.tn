gsap.registerPlugin(ScrollTrigger);
gsap.to(".col-lg-4.col-sm-6.mt-4",{
    x:0,
    duration:3,
    ScrollTrigger:{
        trigger:".col-lg-4.col-sm-6.mt-4",
        start:"top 60%",
        markers:true
    }
})