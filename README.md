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

Now, let run application: \

1. git clone "https://github.com/mobidev86/university-search.git"
2. `cd /university-search`
3. `git checkout university-search`
4. `composer intall`
5. `./vendor/bin/sail up`
6. Open http://127.0.0.1


## FOR UBUNTU ##
Assuming you have docker installed in your system.

1. git clone "https://github.com/mobidev86/university-search.git"
2. cd /university-search
3. `git checkout university-search`
4. Run command:
    `docker run --rm `&#92; \
        `-u "$(id -u):$(id -g)" `&#92; \
        `-v $(pwd):/var/www/html `&#92; \
        `-w /var/www/html `&#92; \
        `laravelsail/php82-composer:latest `&#92; \
        `composer install --ignore-platform-reqs ` \
        `./vendor/bin/sail up`
6. Open http://127.0.0.1




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
