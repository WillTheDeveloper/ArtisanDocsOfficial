<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Artisan Docs | Laravel</title>
</head>

<body class="bg-gray-50">
@livewire('laravel-header')
{{--DOCS GO BELOW HERE--}}


<div class="md:grid md:grid-cols-3 w-full">
    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex justify-center">
        <div class="flex flex-col w-44">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow pb-4 overflow-y-auto">
                <div class="mt-5 flex-grow flex flex-col">
                    <nav class="flex-1 px-2 space-y-1">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="/laravel" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Introduction
                        </a>

                        <a href="/laravel/prerequisites" class="bg-red-500 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Prerequisites
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installation
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Version Control
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            First Project
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installing Packages
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Troubleshooting
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <main class="overflow-y-auto">
            <div>
                <div>
                    <div class="py-4">
                        <p class="text-red-500 text-4xl font-extrabold underline">Prerequisites</p>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Select your operating system:</p>
                        <ul>
                            <li>Windows (Coming Soon)</li>
                            <li>Linux</li>
                            <li>Mac (Coming Soon)</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Prerequisites (Linux)</p>
                        <p>Before we can start playing with Laravel, we need to install some other software and packages.</p>
                        <p class="font-extrabold">Software that we need to install:</p>
                        <ul class="list-disc pl-6">
                            <li>Docker</li>
                            <li>phpstorm</li>
                            <li>Docker Compose</li>
                            <li>Composer 2</li>
                            <li>NPM</li>
                            <li>PHP 8.0</li>
                            <li>Synaptic</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install Synaptic Package Manager</p>
                        <p>This will be really useful when it comes to installing additional things that the server might want
                            to be able to run it and get past any errors that we may encounter regarding missing dependencies.</p>
                        <ul class="list-decimal pl-6">
                            <li>Open a new terminal window</li>
                            <li>Type in the following command: <b class="bg-red-300 text-white">sudo apt install synaptic</b></li>
                            <li>Enter your password, then confirm that you want to install by pressing enter when you are asked.</li>
                            <li>Done! Synaptic is installed!</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install phpstorm</p>
                        <p>This is down to personal preference but this is by far my favourite to use.</p>
                        <ul class="list-decimal pl-6">
                            <li>Open a new terminal window</li>
                            <li>Install snap package manager by entering this command <b class="bg-red-300 text-white">sudo apt install snap</b></li>
                            <li>Enter your password, then confirm that you want to install it by pressing enter when you are asked.</li>
                            <li>Wait for it to finish, you will know it's done when it comes up with you username and the flashing input line.</li>
                            <li>Then we are going to download and install the phpstorm IDE software by running the following command: <b class="bg-red-300 text-white">sudo snap install phpstorm</b></li>
                            <li>Enter your password if it asks, it may not ask at this point.</li>
                            <li>Done! Phpstorm is installed! We will cover how to create a project with or without version control after we have installed everything.</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install Docker</p>
                        <p>Docker is incredibly picky when it comes to operating systems so please make sure that you have one of the following versions of Ubuntu.</p>
                        <ul class="list-disc pl-6">
                            <li>Ubuntu 21.04</li>
                            <li>Ubuntu 20.10</li>
                            <li>Ubuntu 20.04 LTS</li>
                            <li>Ubuntu 18.04 LTS</li>
                        </ul>
                        <p>I have simplified the installation process for docker as the documentation can be quite confusing especially if this is your first time using Laravel.</p>
                        <ul class="list-decimal pl-6">
                            <li>Open a new terminal</li>
                            <li>Run the following command: <b class="bg-red-300 text-white">sudo apt update</b></li>
                            <li>Copy and paste this big command into a terminal and hit enter:</li>
                            <b class="bg-red-300 text-white">sudo apt-get install \<br>
                                apt-transport-https \<br>
                                ca-certificates \<br>
                                curl \<br>
                                gnupg \<br>
                                lsb-release
                            </b>
                            <li>Followed by this command: <b class="bg-red-300 text-white">curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg</b></li>
                            <li>The next command will not give an output, assume it worked if nothing happens: <b class="bg-red-300 text-white">echo \<br>
                                    "deb [arch=amd64 signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu \<br>
                                    $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null</b></li>
                            <li>Run this command again since we added a repo to our updates: <b class="bg-red-300 text-white">sudo apt update</b></li>
                            <li>Install docker by running this command: <b class="bg-red-300 text-white">sudo apt-get install docker-ce docker-ce-cli containerd.io</b></li>
                            <li>Test if everything has gone smoothly: <b class="bg-red-300 text-white">sudo docker run hello-world</b></li>
                            <li>That command will output some text from docker, nothing to worry about.</li>
                            <li>Next we need to ensure docker can run without needing admin privileges each time.</li>
                            <li>This might have been done automatically but to save hassle, do this command: <b class="bg-red-300 text-white">sudo groupadd docker</b></li>
                            <li>Next we need to add our user to the the "docker" group within our operating system: <b class="bg-red-300 text-white">sudo usermod -aG docker $USER</b></li>
                            <li>Now you need to log out of your computer and then sign back in and come back here.</li>
                            <li>Run this command to finalize everything we done so far: <b class="bg-red-300 text-white">newgrp docker</b></li>
                            <li>Now we have done that, this should work: <b class="bg-red-300 text-white">docker run hello-world</b></li>
                            <li>Should give you the same output as given earlier, this will determine if everything has worked regarding permissions.</li>
                            <li>We are nearly finished, now we just need to ensure that docker starts when you turn on your computer.</li>
                            <li>Run the following commands, seperately:</li>
                            <li><b class="bg-red-300 text-white">sudo systemctl enable docker.service</b></li>
                            <li><b class="bg-red-300 text-white">sudo systemctl enable containerd.service</b></li>
                            <li>Then you have finished installing Docker, that was the longest part out the way!</li>
                            <li>Now you need to restart your computer so we don't have any issues when we run Laravel.</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install Docker Compose</p>
                        <ul class="list-decimal pl-6">
                            <li>Download the latest version of docker compose: <b class="bg-red-300 text-white"><br>sudo curl -L "https://github.com/docker/compose/releases/download
                                    /1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</b></li>
                            <li>Lets make what we just downloaded, executable: <b class="bg-red-300 text-white">sudo chmod +x /usr/local/bin/docker-compose</b></li>
                            <li>Done!</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install PHP version 8</p>
                        <ul class="list-decimal pl-6">
                            <li>Install required packages using this command: <b class="bg-red-300 text-white">sudo add update && sudo apt install software-properties-common -y</b></li>
                            <li>Add the repository: <b class="bg-red-300 text-white">sudo add-apt-repository ppa:ondrej/php</b></li>
                            <li>Simply install PHP version 8 by running: <b class="bg-red-300 text-white">sudo apt install php8.0</b></li>
                            <li>Done!</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install NPM package manager</p>
                        <ul class="list-decimal pl-6">
                            <li>Firstly, run this command: <b class="bg-red-300 text-white">sudo apt install npm</b></li>
                            <li>Done! It's easy.</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install Composer and upgrade to version 2</p>
                        <ul class="list-decimal pl-6">
                            <li>Run this command to install Composer initially: <b class="bg-red-300 text-white">sudo apt install composer</b></li>
                            <li>Run the following commands in the given order:</li>
                            <li><b class="bg-red-300 text-white">php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</b></li>
                            <li><b class="bg-red-300 text-white">php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce902
                                    4fc62c56153228907f1545c228516cbf6
                                    3f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3')
                                    { echo 'Installer verified'; } else { echo 'Installer corrupt';
                                    unlink('composer-setup.php'); } echo PHP_EOL;"
                                </b></li>
                            <li><b class="bg-red-300 text-white">php composer-setup.php</b></li>
                            <li><b class="bg-red-300 text-white">php -r "unlink('composer-setup.php');"</b></li>
                            <li>Done!</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Install PHP extensions for Laravel</p>
                        <ul class="list-decimal pl-6">
                            <li>Open "Synaptic Package Manager" by pressing Windows key and searching for it.</li>
                            <li>Enter your password to open the application as it runs as administrator.</li>
                            <li>Go to the top right where it says search</li>
                            <li>You will be presented with a menu, you want to search exactly as follows: php8.0</li>
                            <li>Hit "search" and wait for the results to appear.</li>
                            <li>Hold shift and select the first result that has php8.0 in it and then select the last result.</li>
                            <li>While holding control (dont do this while you scroll), deselect the two following packages as this will cause errors: <b class="bg-red-300 text-white">php8.0-imagick</b> and <b class="bg-red-300 text-white">(Cant remember)</b></li>
                            <li>Hit "Apply" in the top left.</li>
                            <li>Confirm that you wish to install them.</li>
                            <li>Wait for it to finish installing.</li>
                            <li>Done! You have installed PHP 8.0.</li>
                        </ul>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Setup phpstorm to use PHP 8.0</p>
                        <ul class="list-decimal pl-6">
                            <li>Open phpstorm</li>
                            <li>Go through the setup if its the first time that you have opened it.</li>
                            <li>In the corner there will be a settings icon, press on this and you will be presented with a dropdown.</li>
                            <li>You are looking for the Settings tab.</li>
                            <li>On the left had side of the settings window, you are looking for "PHP", press on the main tab for this.</li>
                            <li>You will then be presented with some settings which cna be confusing but I will talk you through it.</li>
                            <li>You need to set the "PHP Language level" to "8.0".</li>
                            <li>Go to the far right side of where it says "CLI Interpreter" and press on the "..." three dots.</li>
                            <li>This will open a new window, go to the top left and press the add sign.</li>
                            <li>You will be presented with some options, select the "/usr/bin/php" option.</li>
                            <li>It should load and you will see it say stuff about PHP 8.0.</li>
                            <li>Press "Apply" and "Apply" again then you are done!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</body>
