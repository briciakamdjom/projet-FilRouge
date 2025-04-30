<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immourez - Plateforme immobilière</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .hero-image {
            background-image: url('https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
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
                    <a href="apropos" class="font-medium text-gray-800 hover:text-blue-600">À propos</a>
                    <a href="#contact" class="font-medium text-gray-800 hover:text-blue-600">Nous Contacter</a>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium">Connexion</a>
                    <a href="{{ route('register') }}" class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-4 py-2 rounded-md font-medium">Inscription</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Section Hero avec image -->
       <!-- Section Hero avec image -->
    <section class="hero-image py-20 md:py-32 text-white relative">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-8 mx-auto max-w-4xl leading-tight">
                Trouvez, Gérez, vos logements avec ImmoConnect
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-12 leading-relaxed font-light">
                Confort, modernité et emplacement idéal pour une expérience mémorable, que ce soit pour un voyage d'affaires, en famille ou en toute sécurité.
            </p>
            <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-md font-medium text-lg inline-block transition-colors duration-300">
                Commencer maintenant
            </a>
        </div>
    </section>

    <!-- Section Logements vedettes avec espace pour images -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Nos logements vedettes</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Carte logement 1 -->
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gray-200">
                        <!-- Espace pour image -->
                        <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Appartement moderne" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Appartement moderne</h3>
                        <p class="text-gray-600 mb-4">Bonamoussadi,Douala</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">120 000Fcfa/mois</span>
                            <button class="text-blue-600 hover:text-blue-800 font-medium">Voir plus</button>
                        </div>
                    </div>
                </div>

                <!-- Carte logement 2 -->
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gray-200">
                        <!-- Espace pour image -->
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Maison contemporaine" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Maison contemporaine</h3>
                        <p class="text-gray-600 mb-4">makepe,Douala</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">160 000Fcfa/mois</span>
                            <button class="text-blue-600 hover:text-blue-800 font-medium">Voir plus</button>
                        </div>
                    </div>
                </div>

                <!-- Carte logement 3 -->
                <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gray-200">
                        <!-- Espace pour image -->
                        <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Chalet montagnard" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Appartement</h3>
                        <p class="text-gray-600 mb-4">Bonapriso, Douala</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">220 000Fcfa/mois</span>
                            <button class="text-blue-600 hover:text-blue-800 font-medium">Voir plus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Qui sommes-nous avec image -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Qui sommes-nous ?</h2>
            
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="rounded-lg overflow-hidden shadow-md h-96">
                        <!-- Espace pour image -->
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Équipe Immourez" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <p class="text-lg text-gray-700 mb-8">
                        ImmoConnect est une plateforme innovante de gestion immobilière conçue pour simplifier la gestion de vos biens. Notre algorithme intelligent vous permet de gérer efficacement votre patrimoine en toute simplicité.
                    </p>
                    
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Pourquoi nous choisir ?</h3>
                        <p class="text-gray-700 mb-4">
                            Notre système automatisé offre des fonctionnalités avancées pour une gestion optimale de vos propriétés, y compris le contrôle à distance des équipements.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-blue-600 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Gestion simplifiée de votre patrimoine</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-blue-600 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Contrôle intelligent des équipements</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-blue-600 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Solution tout-en-une pour propriétaires</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Immourez</h3>
                    <p class="text-gray-400">La solution innovante pour la gestion immobilière.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Logements</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">À propos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
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
                    <p class="text-gray-400 mb-2">contact@immourez.com</p>
                    <p class="text-gray-400">+33 1 23 45 67 89</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 Immourez. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>