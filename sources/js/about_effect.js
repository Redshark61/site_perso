//Petit écran :
if (window.innerWidth <= 700) {
    let controller = new ScrollMagic.Controller();
    let timeline = new TimelineMax();

    timeline
        .fromTo("#wrapper_python", { x: "150%" }, { x: "0px", duration: 100 })
        .fromTo("#wrapper_php", { x: "-150%" }, { x: "0px", duration: 100 })
        .fromTo("#wrapper_cpp", { x: "150%" }, { x: "0px", duration: 100 })
        .fromTo("#wrapper_java", { x: "-150%" }, { x: "0px", duration: 100 });

    let scene = new ScrollMagic.Scene({
        triggerElement: ".competence__appris",
        duration: "60%",
        triggerHook: 0.5,
    })
        .setTween(timeline)
        .addTo(controller);
}
//Grand écran :
else if (window.innerWidth >= 1500) {
    let controller = new ScrollMagic.Controller();
    let timeline = new TimelineMax();

    timeline
        .fromTo("#wrapper_python", { x: "150%" }, { x: "0px", duration: 120 })
        .fromTo("#wrapper_php", { x: "-150%" }, { x: "0px", duration: 120 }, "+=120")
        .fromTo("#wrapper_cpp", { x: "150%" }, { x: "0px", duration: 120 }, "+=120")
        .fromTo("#wrapper_java", { x: "-150%" }, { x: "0px", duration: 120 }, "+=120");

    let scene = new ScrollMagic.Scene({
        triggerElement: ".competence__appris",
        duration: "120%",
        triggerHook: 0.5,
    })
        .setTween(timeline)
        .addTo(controller);
}
//Écran normal:
else {
    let controller = new ScrollMagic.Controller();
    let timeline = new TimelineMax();

    timeline
        .fromTo("#wrapper_python", { x: "150%" }, { x: "0px", duration: 120 })
        .fromTo("#wrapper_php", { x: "-150%" }, { x: "0px", duration: 120 }, "+=120")
        .fromTo("#wrapper_cpp", { x: "150%" }, { x: "0px", duration: 120 }, "+=120")
        .fromTo("#wrapper_java", { x: "-150%" }, { x: "0px", duration: 120 }, "+=120");

    let scene = new ScrollMagic.Scene({
        triggerElement: ".competence__appris",
        duration: "150%",
        triggerHook: 0.25,
    })
        .setTween(timeline)
        .addTo(controller);
}
