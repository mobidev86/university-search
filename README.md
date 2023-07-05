## University Search ##

This application will search universities by country, name, or domain.

## Technology Stack ##
1. Laravel 10
2. React v18
3. Laravel Sail
4. Tailwind CSS
5. Larastan


## Steps to run application ##

## FOR WINDOWS ##

**Prerequisite**
1.  Install WSL 2: \
    Open a command window with administrator privileges and run
    `wsl --install`, after a restart, you will be ready to use WSL.
2. Enable WSL: \
    Open a command window with administrator privileges then run
    `dism.exe /online /enable-feature /featurename:Microsoft-Windows-Subsystem-Linux /all /norestart`
3. Enable the Virtual Machine feature: \
   Virtualization capabilities are still required for WSL 2. Open a command window with administrator privileges then run
   `dism.exe /online /enable-feature /featurename:VirtualMachinePlatform /all /norestart`
4. Download the Linux kernel update package: \
   https://wslstorestorage.blob.core.windows.net/wslblob/wsl_update_x64.msi

Then, restart your computer.

5. Set WSL 2 as your default version
   `wsl --set-default-version 2`
6. Install Ubuntu (or Linux distribution of your choice) \
   I ) Open the Microsoft Store and then search & select Ubuntu. \
   II ) From the distribution page, select “Get” then select “Install” \
   III) Click “Launch” when it is ready \
   IV ) Create your username and password for your Ubuntu
7. Use `wsl --list --verbose` to verify your installation
8. Download Docker Desktop Stable 2.3.0.2 or a later release. \
8.1. In Docker menu, select Settings > General : Make sure WSL 2 is enabled.
   ![image](https://github.com/mobidev86/university-search/assets/45712021/086fbf9f-8e0e-4766-a512-18a0ecaf9cf8) \
8.2 Configure WSL Integration. Make sure you turn on for the correct Linux distros.
![image](https://github.com/mobidev86/university-search/assets/45712021/4a88463d-df15-46b6-b1a3-09554b3064f2)



**_Now, let run application:_ **
1. Launch the Windows Terminal and key in wsl
 ![image](https://github.com/mobidev86/university-search/assets/45712021/8a02789f-ce59-4232-a7d5-3d2995988a84)

2. `git clone "https://github.com/mobidev86/university-search.git"`
3. `cd /university-search`
4. `git checkout university-search`
5. `composer install`
6. `./vendor/bin/sail up`
7. Open http://127.0.0.1


## FOR UBUNTU ##
Assuming you have docker installed in your system. If not, please follow this: \
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04

**Prerequisite**
Docker install & running.

**_Now, let run application:_ **

Peform below commands:

1. `git clone "https://github.com/mobidev86/university-search.git"`
2. `cd /university-search`
3. `git checkout university-search`
4. `composer install`
5. `./vendor/bin/sail up`               
6. Open http://127.0.0.1

## FOR MAC OS ##
Assuming you have docker installed in your system. If not, please follow this: \
https://docs.docker.com/desktop/install/mac-install/

**Prerequisite**
Docker install & running.

**_Now, let run application:_ **

Peform below commands:

1. `git clone "https://github.com/mobidev86/university-search.git"`
2. `cd /university-search`
3. `git checkout university-search`
4. `composer install`
5. `./vendor/bin/sail up`               
6. Open http://127.0.0.1

## NOTE ##
If you face any error, like connection refused, please follow below steps:
1. `Ctrl + C`
2. `./vendor/bin/sail up`

## Cache ##
We have used Redis(Laravel default) cache on server side and on client side we are using UseMemo Hook.


## Example credentials ##
Username: test@example.app
Password: password123


## Additional Comments ##
We have used larastan plugin to maintain quality of code. reference link : https://packagist.org/packages/nunomaduro/larastan


## Screenshots ##
<a href="https://prnt.sc/mN_eQucaxtsQ" target="_blank">Screen 1 </a>
<a href="https://prnt.sc/XERoAMN0XogD" target="_blank">Screen 2 </a>

## Video Demo ##
<a href="https://screenrec.com/share/5tjni1FRcr" target="_blank">Click here to see</a>
