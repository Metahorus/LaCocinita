<x-mail::message>
# ¡Hola!

Alguien ha contactado contigo a través de la página web y ha proporcionado sus datos para que puedas responderle.<br>

A continuación encontrarás los detalles del cliente:

<x-mail::panel>
<strong>Nombre:</strong> {{ $correo['nombre'] }}<br>
</x-mail::panel>

<x-mail::panel>
<strong>Email:</strong> {{ $correo['email'] }}<br>
</x-mail::panel>

<x-mail::panel>
<strong>Mensaje:</strong> {{ $correo['mensaje'] }}<br>
</x-mail::panel>

<x-mail::button :url="$correo['url']">
Responder
</x-mail::button>

Por favor, asegúrate de responder al mensaje del cliente en el menor tiempo posible.<br>

¡Gracias por tu atención y que tengas un buen día!

</x-mail::message>

{{-- Modificaciones en views > vendor > html > header y themes > default.css--}}