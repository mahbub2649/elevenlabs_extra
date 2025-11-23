<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKEA Support | Powered by ElevenLabs</title>
    
    <!-- Fonts: Inter (Standard for Shadcn) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS with Shadcn Configuration -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        border: "hsl(var(--border))",
                        input: "hsl(var(--input))",
                        ring: "hsl(var(--ring))",
                        background: "hsl(var(--background))",
                        foreground: "hsl(var(--foreground))",
                        primary: {
                            DEFAULT: "hsl(var(--primary))",
                            foreground: "hsl(var(--primary-foreground))",
                        },
                        card: {
                            DEFAULT: "hsl(var(--card))",
                            foreground: "hsl(var(--card-foreground))",
                        },
                        ikea: {
                            yellow: '#FFDB00',
                            blue: '#0058A3'
                        }
                    },
                    borderRadius: {
                        lg: "var(--radius)",
                        md: "calc(var(--radius) - 2px)",
                        sm: "calc(var(--radius) - 4px)",
                    },
                    animation: {
                        'grid-flow': 'gridFlow 20s linear infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        gridFlow: {
                            '0%': { transform: 'translateY(0)' },
                            '100%': { transform: 'translateY(40px)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS Variables for Shadcn Look -->
    <style type="text/tailwindcss">
        @layer base {
            :root {
                --background: 240 10% 3.9%;
                --foreground: 0 0% 98%;
                --card: 240 10% 3.9%;
                --card-foreground: 0 0% 98%;
                --popover: 240 10% 3.9%;
                --popover-foreground: 0 0% 98%;
                --primary: 0 0% 98%;
                --primary-foreground: 240 5.9% 10%;
                --secondary: 240 3.7% 15.9%;
                --secondary-foreground: 0 0% 98%;
                --muted: 240 3.7% 15.9%;
                --muted-foreground: 240 5% 64.9%;
                --accent: 240 3.7% 15.9%;
                --accent-foreground: 0 0% 98%;
                --destructive: 0 62.8% 30.6%;
                --destructive-foreground: 0 0% 98%;
                --border: 240 3.7% 15.9%;
                --input: 240 3.7% 15.9%;
                --ring: 240 4.9% 83.9%;
                --radius: 0.5rem;
            }
        }
        
        /* Futuristic Background Effects */
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            mask-image: linear-gradient(to bottom, black 40%, transparent 100%);
        }

        /* Glow Effect behind the image */
        .glow-effect {
            background: radial-gradient(circle, rgba(0,88,163,0.4) 0%, rgba(0,0,0,0) 70%);
        }
        
        /* ElevenLabs Widget Styling - Bottom Right Position */
        elevenlabs-convai {
            position: fixed !important;
            bottom: 20px !important;
            right: 20px !important;
            z-index: 9999 !important;
        }
    </style>
</head>
<body class="bg-background text-foreground min-h-screen flex flex-col overflow-hidden relative selection:bg-ikea-blue selection:text-white">

    <!-- Background Animations -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <!-- Moving Grid -->
        <div class="absolute inset-0 bg-grid-pattern animate-grid-flow opacity-30"></div>
        <!-- Ambient Glows -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-ikea-blue/20 rounded-full blur-[100px] animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-ikea-yellow/10 rounded-full blur-[100px] animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <!-- Header -->
    <header class="relative z-10 w-full px-6 py-6 flex justify-between items-center border-b border-border bg-background/50 backdrop-blur-md">
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-ikea-yellow"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span class="font-bold tracking-tight text-xl">IKEA <span class="text-muted-foreground font-normal text-sm">AI Support</span></span>
        </div>
        <div class="text-xs text-muted-foreground uppercase tracking-widest border border-border px-3 py-1 rounded-full">
            ElevenLabs Powered
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 flex-1 flex flex-col lg:flex-row items-center justify-center gap-12 p-6 lg:p-12 max-w-7xl mx-auto w-full">
        
        <!-- Left Column: Text & Context -->
        <div class="flex-1 space-y-6 text-center lg:text-left max-w-xl">
            <div class="inline-flex items-center rounded-full border border-border bg-secondary px-3 py-1 text-sm font-medium text-secondary-foreground shadow-sm backdrop-blur-xl">
                <span class="flex h-2 w-2 rounded-full bg-green-500 mr-2 animate-pulse"></span>
                System Online
            </div>
            <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight lg:leading-tight">
                Experience the future of <span class="text-transparent bg-clip-text bg-gradient-to-r from-ikea-blue to-blue-400">Customer Care</span>
            </h1>
            <p class="text-lg text-muted-foreground">
                Talk naturally with our AI assistant. Whether you need assembly help, stock checks, or design advice, we are here 24/7.
            </p>
        </div>

        <!-- Right Column: Agent Visual -->
        <div class="flex-1 relative flex justify-center items-center w-full max-w-md animate-float">
            <!-- Glow Behind -->
            <div class="absolute inset-0 glow-effect blur-[60px]"></div>
            
            <!-- Agent Card -->
            <div class="relative bg-zinc-900/80 border border-white/10 rounded-2xl overflow-hidden shadow-2xl backdrop-blur-sm">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-ikea-blue to-ikea-yellow"></div>
                
                <!-- Image Container -->
                <!-- IMPORTANT: Save your image as 'ikea-agent.png' in the same folder -->
                <img src="ikea-agent.png" alt="IKEA AI Agent" class="w-full h-auto object-cover" onerror="this.style.display='none'; document.getElementById('fallback-icon').style.display='flex'">
                
                <!-- Fallback if image missing -->
                <div id="fallback-icon" class="hidden w-[400px] h-[400px] bg-zinc-800 items-center justify-center">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-zinc-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </div>

                <!-- Card Overlay Info -->
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/90 to-transparent">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-white">Sarah</h3>
                            <p class="text-xs text-zinc-400">Senior Support Agent</p>
                        </div>
                        <div class="h-8 w-8 rounded-full bg-ikea-blue flex items-center justify-center text-ikea-yellow font-bold text-xs border border-white/20">
                            IKEA
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="relative z-10 py-6 text-center text-sm text-muted-foreground border-t border-border/50 bg-background/50">
        <p>&copy; <?php echo date("Y"); ?> IKEA Systems B.V. | AI Technology by ElevenLabs</p>
    </footer>

    <!-- ElevenLabs Widget - Fixed Bottom Right -->
    <elevenlabs-convai agent-id="agent_6001kardj7jafqha5m8yk8r5m91k"></elevenlabs-convai>

    <!-- ElevenLabs Script -->
    <script src="https://unpkg.com/@elevenlabs/convai-widget-embed" async type="text/javascript"></script>

</body>
</html>