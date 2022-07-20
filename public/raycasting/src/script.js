//Texure Loader
const texture_loader = new THREE.TextureLoader();

// Canvas
const canvas = document.querySelector("canvas.webgl");

// Scene
const scene = new THREE.Scene();

const geometry = new THREE.PlaneBufferGeometry(1, 1.3);

for (let i = 1; i < 5; i++) {
    const material = new THREE.MeshBasicMaterial({
        map: texture_loader.load(`../photos/(${i}).jpg`),
    });

    const image = new THREE.Mesh(geometry, material);
    image.position.set(Math.random() + 0.3, (i - 1) * -1.8);

    scene.add(image);
}

var objects = [];

scene.traverse((object) => {
    if (object.isMesh) {
        objects.push(object);
    }
});

// Lights

const pointLight = new THREE.PointLight(0xffffff, 0.1);
pointLight.position.x = 2;
pointLight.position.y = 3;
pointLight.position.z = 4;
scene.add(pointLight);

/**
 * Sizes
 */
const sizes = {
    width: window.innerWidth,
    height: window.innerHeight,
};

window.addEventListener("resize", () => {
    // Update sizes
    sizes.width = window.innerWidth;
    sizes.height = window.innerHeight;

    // Update camera
    camera.aspect = sizes.width / sizes.height;
    camera.updateProjectionMatrix();

    // Update renderer
    renderer.setSize(sizes.width, sizes.height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
});

/**
 * Camera
 */
// Base camera
const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100);
camera.position.x = 0;
camera.position.y = 0;
camera.position.z = 2;
scene.add(camera);

// Controls
// const controls = new OrbitControls(camera, canvas)
// controls.enableDamping = true

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer({
    canvas: canvas,
});
renderer.setSize(sizes.width, sizes.height);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

//Mouse
window.addEventListener("wheel", onMouseWheel);
var y = 0;
var position = 0;
function onMouseWheel(e) {
    y = e.deltaY * 0.0012;
}

const mouse = new THREE.Vector2();

window.addEventListener("mousemove", (e) => {
    mouse.x = (e.clientX / sizes.width) * 2 - 1;
    mouse.y = -(e.clientY / sizes.height) * 2 + 1;
});

/**
 * Animate
 */

const ray_caster = new THREE.Raycaster();

const clock = new THREE.Clock();

const tick = () => {
    const elapsedTime = clock.getElapsedTime();

    // Update camera
    position += y;
    y *= 0.9;
    camera.position.y = -position;

    //Raycsater
    ray_caster.setFromCamera(mouse, camera);
    const intersects = ray_caster.intersectObjects(objects);
    for (const intersect of intersects) {
        gsap.to(intersect.object.scale, { x: 1.7, y: 1.7 });
        gsap.to(intersect.object.rotation, { y: -0.5 });
        gsap.to(intersect.object.position, { z: -0.9 });
    }

    for (const object of objects) {
        if (!intersects.find((intersect) => intersect.object === object)) {

            gsap.to(object.scale, { x: 1, y: 1 });
            gsap.to(object.rotation, { y: 0 });
            gsap.to(object.position, { z: 0 });
        }
    }

    // Render
    renderer.render(scene, camera);

    // Call tick again on the next frame
    window.requestAnimationFrame(tick);
};

tick();
