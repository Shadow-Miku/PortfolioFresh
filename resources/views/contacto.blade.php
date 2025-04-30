@extends('layouts.portafolio')
@section('title', 'Contacto')

@section('content')
<article class="contact px-4 max-w-4xl mx-auto bg-black bg-opacity-15 shadow-md rounded-lg" data-page="contact">
  <header class="mb-8 text-center">
    <h2 class="text-4xl font-bold text-white mb-12 text-center">Contact</h2>
  </header>

  <!-- Mapa de Google -->
  <section class="mapbox mb-10 rounded-lg overflow-hidden shadow-lg" data-mapbox>
    <figure>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.123456789!2d-100.389888!3d20.588793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35bcd12345678%3A0x123456789abcdef!2sQuerétaro%2C%20Qro.%2C%20México!5e0!3m2!1ses!2smx!4v1647608789441!5m2!1ses!2smx"
        width="100%"
        height="300"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Ubicación en Querétaro"
        class="w-full"
      ></iframe>
    </figure>
  </section>

  <!-- Formulario de contacto -->
  <section class="contact-form bg-white p-6 rounded-lg shadow-md">
    <h3 class="text-2xl font-semibold mb-6 text-gray-700 text-center">Contact Form</h3>

    <form id="contactForm" class="space-y-5" data-form autocomplete="off" aria-label="Formulario de contacto">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div>
          <label for="fullname" class="block text-sm font-medium text-gray-600 mb-1">Name</label>
          <input
            type="text"
            id="fullname"
            name="fullname"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800"
            placeholder="Ex. Juan Pérez"
            required
            data-form-input
          />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800"
            placeholder="Ex. mail@example.com"
            required
            data-form-input
          />
        </div>
      </div>

      <div>
        <label for="message" class="block text-sm font-medium text-gray-600 mb-1">Message</label>
        <textarea
          id="message"
          name="message"
          rows="5"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 resize-none text-gray-800"
          placeholder="Write your message..."
          required
          data-form-input
        ></textarea>
      </div>

      <div class="text-center">
        <button
          type="submit"
          class="inline-flex items-center gap-2 px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 transition duration-200"
          data-form-btn
        >
          <ion-icon name="paper-plane" class="text-lg"></ion-icon>
          <span>Send</span>
        </button>
      </div>
    </form>
  </section>
</article>

<script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const fullname = document.querySelector('input[name="fullname"]').value.trim();
    const email = document.querySelector('input[name="email"]').value.trim();
    const message = document.querySelector('textarea[name="message"]').value.trim();

    if (!fullname || !email || !message) {
      alert('Please fill in all fields.');
      return;
    }

    const whatsappMessage = `*Contacto desde el portafolio*\n\n*Nombre:* ${fullname}\n*Correo:* ${email}\n*Mensaje:* ${message}`;
    const phoneNumber = '5214462120258';

    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;
    window.open(whatsappURL, '_blank');
  });
</script>
@endsection
