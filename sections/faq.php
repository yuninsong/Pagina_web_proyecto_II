<?php
$faqs = [
    [
        "subtitulo" => "Información General",
        "preguntas" => [
            ["pregunta" => "¿Qué es la UNEXCA?", "respuesta" => "La Universidad Nacional Experimental de Caracas (UNEXCA) es una institución pública de educación superior en Caracas."],
            ["pregunta" => "¿Cómo puedo contactar a la UNEXCA?", "respuesta" => "Puedes comunicarte a través de su sitio web oficial o visitar la sede principal en Caracas."],
            ["pregunta" => "¿La UNEXCA ofrece educación a distancia?", "respuesta" => "Sí, cuenta con programas de educación a distancia y semipresenciales para mayor accesibilidad."]
        ]
    ],
    [
        "subtitulo" => "Inscripción y Oferta Académica",
        "preguntas" => [
            ["pregunta" => "¿Cuáles son los requisitos de inscripción?", "respuesta" => "Los requisitos varían según el programa, pero generalmente incluyen título de bachiller, cédula de identidad y planilla de preinscripción."],
            ["pregunta" => "¿Qué carreras ofrece la UNEXCA?", "respuesta" => "La UNEXCA ofrece programas en educación, administración, contaduría pública, distribución y logística, informática y trabajo social."],
            ["pregunta" => "¿Qué significan las siglas de cada carrera?", "respuesta" => "PNF = Programa Nacional de Formación, A = Administración, CP = Contaduría Pública, I = Informática."]
        ]
    ],
    [
        "subtitulo" => "Estructura Académica y Horarios",
        "preguntas" => [
            ["pregunta" => "¿Cómo se divide el tiempo en las carreras?", "respuesta" => "Las carreras se dividen en trayectos de dos semestres cada uno. Para el TSU son dos trayectos completos y para la licenciatura son cuatro trayectos completos."],
            ["pregunta" => "¿Qué turnos tiene disponible la UNEXCA?", "respuesta" => "La UNEXCA cuenta con los turnos matutino, diurno y nocturno."],
            ["pregunta" => "¿Por qué no veo la carrera en la que me inscribí?", "respuesta" => "Antes de iniciar el plan de estudios, debes cursar un propedéutico para nivelar tu conocimiento académico."]
        ]
    ],
    [
        "subtitulo" => "Cambios y Actividades Complementarias",
        "preguntas" => [
            ["pregunta" => "¿Puedo cambiar de carrera, turno o sede?", "respuesta" => "Sí, puedes solicitar un cambio de carrera, sede y turno en control de estudios."],
            ["pregunta" => "¿La UNEXCA ofrece actividades extracurriculares?", "respuesta" => "Sí, la UNEXCA ofrece cursos gratuitos para los estudiantes en diversas competencias académicas."]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Encuentra respuestas a las preguntas más frecuentes sobre la UNEXCA.">
    <title>Preguntas Frecuentes - UNEXCA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style-faq.css">
    <link rel="stylesheet" href="/css/general-style.css">
    <link rel="icon" href="/assets/icon/logo-unexca_favicon-32x32.png" type="image/png">
</head>
<body>
<header class="header-faq">
    <div id="navbar"></div>
    <script>
        fetch("navbar.html")
            .then(response => response.text())
            .then(data => {
                document.getElementById("navbar").innerHTML = data;
            });
    </script>
</header>

<main class="main-faq">
    <div class="container mt-5">
        <div class="faq-container p-4 rounded shadow bg-white">
            <h2 class="text-center text-custom">Preguntas Frecuentes</h2>
            <?php foreach ($faqs as $seccion): ?>
                <h3 class="mt-4"><?php echo $seccion['subtitulo']; ?></h3>
                <?php foreach ($seccion['preguntas'] as $faq): ?>
                    <div class="faq-item border-bottom py-2">
                        <button class="faq-question btn btn-custom w-100 text-start" data-bs-toggle="collapse" data-bs-target="#faq<?php echo md5($faq['pregunta']); ?>">
                            <?php echo $faq['pregunta']; ?>
                        </button>
                        <div id="faq<?php echo md5($faq['pregunta']); ?>" class="collapse mt-2">
                            <div class="faq-answer p-3 bg-white border rounded">
                                <p><?php echo $faq['respuesta']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="faq-footer" id="footer"></div>
<script>
    fetch("footer.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("footer").innerHTML = data;
        });
</script>
</body>
</html>
