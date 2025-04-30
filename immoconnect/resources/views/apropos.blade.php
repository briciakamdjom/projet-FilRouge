<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - ImmoConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-3">
                        <span class="text-xl font-bold text-white">IC</span>
                    </div>
                    <span class="text-2xl font-bold text-blue-600">ImmoConnect</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="font-medium text-gray-800 hover:text-blue-600">Accueil</a>
                    <a href="/nos-logements" class="font-medium text-gray-800 hover:text-blue-600">Nos Logements</a>
                    <a href="{{ route('apropos') }}" class="font-medium text-gray-800 hover:text-blue-600">À propos</a>
                    <a href="#contact" class="font-medium text-gray-800 hover:text-blue-600">Nous Contacter</a>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium">Connexion</a>
                    <a href="{{ route('register') }}" class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-4 py-2 rounded-md font-medium">Inscription</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Section principale À propos avec image de fond -->
    <section class="relative py-32 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1773&q=80');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-5xl font-bold text-center text-white mb-8">À propos d'ImmoConnect</h1>
            <div class="max-w-3xl mx-auto text-lg text-white space-y-6 text-center">
                <p class="text-xl">
                    ImmoConnect est née de la vision de simplifier la gestion immobilière au Cameroun.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Mission et Vision -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-lg text-gray-700 space-y-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                    <h2 class="text-3xl font-bold mb-6 text-blue-600">Notre Mission</h2>
                    <p>
                        Notre plateforme combine technologie innovante et expertise immobilière pour offrir une solution complète aux propriétaires et locataires.
                    </p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                    <h2 class="text-3xl font-bold mb-6 text-blue-600">Notre Vision</h2>
                    <p>
                        Révolutionner le secteur immobilier en proposant des outils modernes et efficaces pour la gestion de biens immobiliers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Notre équipe avec fond alterné -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Notre équipe</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Membre cards avec effet hover -->
                <div class="text-center">
                    <div class="w-40 h-40 mx-auto rounded-full overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Membre équipe" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Jean Dupont</h3>
                    <p class="text-gray-600">Fondateur & CEO</p>
                </div>
                
                <div class="text-center">
                    <div class="w-40 h-40 mx-auto rounded-full overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" alt="Membre équipe" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Marie Martin</h3>
                    <p class="text-gray-600">Directrice Technique</p>
                </div>
                
                <div class="text-center">
                    <div class="w-40 h-40 mx-auto rounded-full overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e" alt="Membre équipe" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Paul Dubois</h3>
                    <p class="text-gray-600">Responsable Commercial</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos valeurs avec design amélioré -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Nos valeurs</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Value cards avec effet hover -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 text-blue-600">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Innovation</h3>
                    <p class="text-gray-600">Nous repoussons constamment les limites de la technologie immobilière.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 text-blue-600">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Transparence</h3>
                    <p class="text-gray-600">Nous privilégions une communication claire et honnête avec nos clients.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 text-blue-600">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sécurité</h3>
                    <p class="text-gray-600">La protection des données de nos clients est notre priorité absolue.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">ImmoConnect</h3>
                    <p class="text-gray-400">La solution innovante pour la gestion immobilière.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="/nos-logements" class="text-gray-400 hover:text-white">Logements</a></li>
                        <li><a href="#apropos" class="text-gray-400 hover:text-white">À propos</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Légal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">CGU</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookies</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <p class="text-gray-400 mb-2">contact@immoconnect.com</p>
                    <p class="text-gray-400">+237 6 XX XX XX XX</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 ImmoConnect. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>