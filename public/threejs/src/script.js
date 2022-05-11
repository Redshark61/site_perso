// import "./style.css";
// import * as THREE from "three";
// import { OrbitControls } from "three/examples/jsm/controls/OrbitControls.js";
// import * as dat from "dat.gui";

//Loader
const texture_loader = new THREE.TextureLoader();
const normal_texture = texture_loader.load("../static/textures/NormalMap (1).png");

// Debug
//const gui = new dat.GUI();

// Canvas
const canvas = document.querySelector("canvas.webgl");

// Scene
const scene = new THREE.Scene();

// Objects
const geometry = new THREE.SphereBufferGeometry(0.5, 64, 64);

// Materials

const material = new THREE.MeshStandardMaterial();
material.color = new THREE.Color(0x37365b);
material.roughness = 0.3;
material.metalness = 0.9;
material.normalMap = normal_texture;
// material.flatShading = true;

// Mesh
const sphere = new THREE.Mesh(geometry, material);
scene.add(sphere);

// Lights
const pointLight = new THREE.PointLight(0xff0000, 1);
pointLight.position.set(-2.8, 2.2, -2);
pointLight.intensity = 0.5;
scene.add(pointLight);

/*
const light1 = gui.addFolder("Light 1");
light1.add(pointLight.position, "x").min(-3).max(3).step(0.1);
light1.add(pointLight.position, "y").min(-3).max(3).step(0.1);
light1.add(pointLight.position, "z").min(-3).max(3).step(0.1);
light1.add(pointLight, "intensity").min(0).max(10).step(0.1);

const light1_color = {
    color: 0x0000ff,
};

light1.addColor(light1_color, "color").onChange(() => {
    pointLight.color.set(light1_color.color);
});

const pointlight_helper1 = new THREE.PointLightHelper(pointLight, 1);
scene.add(pointlight_helper1);*/

//Lights 2
const pointLight2 = new THREE.PointLight(0x0000ff, 2);
pointLight2.position.set(2.1, -1.5, -1.7);
pointLight2.intensity = 0.5;
scene.add(pointLight2);

/*
const light2 = gui.addFolder("Light 2");
light2.add(pointLight2.position, "x").min(-3).max(3).step(0.1);
light2.add(pointLight2.position, "y").min(-3).max(3).step(0.1);
light2.add(pointLight2.position, "z").min(-3).max(3).step(0.1);
light2.add(pointLight2, "intensity").min(0).max(10).step(0.1);

const light2_color = {
    color: 0x0000ff,
};

light2.addColor(light2_color, "color").onChange(() => {
    pointLight2.color.set(light2_color.color);
});

const pointlight_helper2 = new THREE.PointLightHelper(pointLight2, 1);
scene.add(pointlight_helper2);*/

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
    alpha: true,
});
renderer.setSize(sizes.width, sizes.height);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

/**
 * Animate
 */

document.addEventListener("mousemove", onDocumentMouseMove);
let mouse_x = 0;
let mouse_y = 0;

let target_x = 0;
let target_y = 0;

const window_half_width = window.innerWidth / 2;
const window_half_height = window.innerHeight / 2;

function onDocumentMouseMove(event) {
    mouse_x = event.clientX - window_half_width;
    mouse_y = event.clientY - window_half_height;
}

window.addEventListener("scroll", updateSphere);

function updateSphere(event) {
    sphere.position.y = window.scrollY * 0.001;
}

const clock = new THREE.Clock();

const tick = () => {
    target_x = mouse_x * 0.001;
    target_y = mouse_y * 0.001;

    const elapsedTime = clock.getElapsedTime();

    // Update objects
    sphere.rotation.y = 0.5 * elapsedTime;

    sphere.rotation.y += 0.5 * (target_x - sphere.rotation.y);
    sphere.rotation.x += 0.5 * (target_y - sphere.rotation.x);
    sphere.position.z += -0.5 * (target_y - sphere.rotation.x);

    // Update Orbital Controls
    // controls.update()

    // Render
    renderer.render(scene, camera);

    // Call tick again on the next frame
    window.requestAnimationFrame(tick);
};

tick();
