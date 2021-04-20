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
        triggerHook: 0.6,
    })
        .setTween(timeline)
        .addTo(controller);
} else {
    let controller = new ScrollMagic.Controller();
    let timeline = new TimelineMax();

    timeline
        .fromTo("#wrapper_python", { x: "150%" }, { x: "0px", duration: 100 })
        .fromTo("#wrapper_php", { x: "-150%" }, { x: "0px", duration: 100 })
        .fromTo("#wrapper_cpp", { x: "150%" }, { x: "0px", duration: 100 })
        .fromTo("#wrapper_java", { x: "-150%" }, { x: "0px", duration: 100 });

    let scene = new ScrollMagic.Scene({
        triggerElement: ".competence__appris",
        duration: "110%",
        triggerHook: 0.25,
    })
        .setTween(timeline)
        .addTo(controller);
}
