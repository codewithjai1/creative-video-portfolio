<div align="center">

  <img src="assets/img/logo.png" alt="Creative Video Portfolio Logo" width="120" height="120" />

# Creative Video Portfolio

**Reimagine Video Storytelling. Present Your Work in Style.**

  <p>
    <a href="https://github.com/gtxPrime/creative-video-portfolio/stargazers">
      <img src="https://img.shields.io/github/stars/gtxPrime/creative-video-portfolio?style=for-the-badge&color=yellow" alt="Stars" />
    </a>
    <a href="https://github.com/gtxPrime/creative-video-portfolio/network/members">
      <img src="https://img.shields.io/github/forks/gtxPrime/creative-video-portfolio?style=for-the-badge&color=orange" alt="Forks" />
    </a>
    <a href="https://github.com/gtxPrime/creative-video-portfolio/issues">
      <img src="https://img.shields.io/github/issues/gtxPrime/creative-video-portfolio?style=for-the-badge&color=blue" alt="Issues" />
    </a>
    <a href="https://github.com/gtxPrime/creative-video-portfolio/blob/main/LICENSE">
      <img src="https://img.shields.io/badge/License-MIT-brightgreen?style=for-the-badge" alt="License" />
    </a>
    <a href="#">
      <img src="https://img.shields.io/badge/Platform-Web-1f425f?logo=html5&logoColor=white&style=for-the-badge" alt="Platform" />
    </a>
  </p>

  <h3>
    <a href="#-about">About</a>
    <span> | </span>
    <a href="#-features">Features</a>
    <span> | </span>
    <a href="#-tech-stack">Tech Stack</a>
    <span> | </span>
    <a href="#-customization-guide">Customization Guide</a>
    <span> | </span>
    <a href="#-installation--hosting">Installation & Hosting</a>
  </h3>

</div>

---

## 🎨 About Creative Video Portfolio

This project is a premium, interactive, and fully-responsive single-page/multi-page portfolio website template tailored specifically for **Video Editors, Creative Producers, Motion Designers, and Filmmakers**. It features fluid animations, clean modern layouts, and rich interactive components that showcase high-definition video thumbnails and play links seamlessly.

This portfolio is built to showcase your work in a high-end presentation format and help convert profile visitors into active clients.

---

## 🚀 Features

### 🎞️ Premium Video Gallery & Filters
- **Isotope-Powered Dynamic Grid:** Filter portfolio pieces by category (e.g., Short-form, AI Video, Commercials, Social Media) in real-time with fluid reorganizing animations.
- **Responsive Video Modals/Links:** Seamless links to full-length client work or stock/generic YouTube/Vimeo links with eye-catching hover cards.
- **Stunning Thumbnail Cover Images:** Structured thumbnail sizing optimized for load times and visual consistency.


### ⚡ Smooth Motion & Custom Aesthetics
- **AJAX Page Loader:** App-like page transitions that keep the audio/visual flow intact without full-page browser reloads.
- **Swiper Testimonials:** A premium slider carousel showcasing client reviews with stock profile photos and custom transition effects.
- **Elegant Cursor Particles:** Responsive ball-cursor follow effect that responds dynamically to clickable buttons, headers, and images.
- **Custom Scrollbar & Dark Mode:** Hand-coded dark color palette with custom scrollbars and layout animations optimized for creative displays.

### 📧 SMTP Contact Form Handler
- **Secure PHP Contact Backend:** An organized PHP script (`contact.php`) featuring sanitization filters, customized headers, and fail-safes to forward client messages directly to your email inbox.

---

## 🛠️ Tech Stack

- **Core Technologies:** HTML5, Vanilla CSS3 (Custom Styling & Grid Layout), JavaScript (ES6+ Modules)
- **Libraries & Toolkits:** 
  - [GSAP](https://greensock.com/gsap/) (Scroll animations and transition tweens)
  - [Swiper JS](https://swiperjs.com/) (Fluid touch-enabled carousels)
  - [Isotope JS](https://isotope.metafizzy.co/) (Dynamic layout grid filtering)

- **Server-Side Handling:** PHP (Form submissions & mail forwarding)

---

## ⚙️ Customization Guide

Preparing the template for your personal brand is quick and straightforward. Follow these steps:

### 1. Update Personal & Brand Information
Open `index.html`, `about.html`, `work.html`, and `contact.html`, then locate and modify:
- **Title Name:** Look for the `<title>` tag and header `<h3>` tags to change `Garvit Sharma` / `Garvit` to your name.
- **Hero Title:** Replace the Sharma surname layout block with your own:
  ```html
  <h1 class="title-h1 text-upper">
      &nbsp;YourName&nbsp;&nbsp;&nbsp; Surname
  </h1>
  ```
- **Social Handles:** Update links referencing `@gtxPrime` (e.g. Telegram, Instagram, GitHub, LinkedIn) with your own social handles.

### 2. Configure Contact Forms & Info
- **Email:** The HTML files use the email address `coffeewithgarvit@gmail.com` for client convenience. Update all occurrences to your own email address.
- **Phone Number:** The personal phone number has been generalized to `+91 99999 99999`. Update this to your active business phone number or remove the block if preferred.
- **PHP Form Mailer:** Open `contact.php` and change the recipient email variable to your inbox address:
  ```php
  $to = "your.email@example.com"; // Your receiving email address
  ```
  *Note: To prevent emails from being flagged as spam, make sure the `From:` header matches a mailbox hosted on the same domain as your website.*

### 3. Replace Portfolio Videos & Thumbnails
- **Thumbnails:** Update images in `assets/img/thumbnails/` to match your projects. You can save your images as `1.jpg`, `22.png`, etc., to match the layout references.
- **YouTube Links:** Update references to the stock YouTube videos (`https://www.youtube.com/watch?v=...`) in `index.html` and `work.html` with your actual video portfolio uploads.

### 4. Swap Client Testimonials
To customize reviews, edit the testimonial blocks in `index.html` (lines 1045-1113) and `about.html` (lines 402-452):
- Change names (`Alex Mercer`, `Sarah Jenkins`, `Michael K.`) and company designations.
- Replace quote texts with your actual client feedback.
- Update profile photos in `assets/img/testimonial/` (`1.jpg`, `2.jpg`, `3.jpg`).



---

## 🌐 Installation & Hosting

### Local Server Setup
To preview pages locally and test the PHP contact form:
1. Clone this repository to your local directory:
   ```bash
   git clone https://github.com/your-username/creative-video-portfolio.git
   ```
2. Move files into a local PHP server environment (e.g., using **XAMPP**, **MAMP**, or Python's server utility if PHP isn't required).
3. Open `http://localhost/creative-video-portfolio/index.html` in your web browser.

### Hosting & Production Deployment
- **Static Frontend Hosting:** The front-end files (`HTML`, `CSS`, `JS`, and asset images) can be hosted for free on platforms like **GitHub Pages**, **Vercel**, or **Netlify**.
- **PHP Form Processing:** Since GitHub Pages and Netlify do not support server-side PHP scripts, the `contact.php` script requires hosting on standard web servers with PHP mail services enabled (e.g. Hostinger, Bluehost), or integrating static form service endpoints like **Formspree** or **Web3Forms** instead.

---

## 📄 License

This template is open-source software licensed under the [MIT License](LICENSE). Feel free to customize and use it for commercial or personal production work.
