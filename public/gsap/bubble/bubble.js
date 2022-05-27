const tl = gsap.timeline({defaults:{ease:'power1.out'}, repeat:-1})

tl.fromTo('.bubble',{scale:0, background:' rgb(50, 49, 73)'}, {scale:1,background:' rgb(71, 102, 187)', duration:1, stagger:0.6})
tl.fromTo('.bubble',{opacity:1}, {opacity:0, duration:1.5, stagger:0.7})