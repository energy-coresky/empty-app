
# Empty app from Coresky PHP framework

Docs: [wiki section](https://github.com/energy-coresky/air/wiki) (russian only).

Homepage: https://coresky.net/

# Install & run

With composer:

```bash
composer create-project coresky/hole hole "dev-master"
cd hole/public
php ../vendor/energy/air/sky s
```

Or with moon:

```bash
curl https://coresky.net/api?get=hole.zip > hole.zip
mkdir -p hole/public
unzip hole.zip -d hole/public
cd hole/public
php moon.php hole.sky
```

After "HOLE.SKY." running, try download & install Dev-wares using
Dev-tool's web-interface..

Or download all with git:

```bash
# the app
git clone https://github.com/energy-coresky/empty-app.git
# the framework
git clone https://github.com/energy-coresky/air.git
# the wares
mkdir empty-app/wares
cd empty-app/wares
git clone https://github.com/energy-coresky/parsedown.git
git clone https://github.com/energy-coresky/earth.git
git clone https://github.com/energy-coresky/mercury.git
# then run PHP's embedded web-server:
cd ../public
php ../../air/sky s
```
