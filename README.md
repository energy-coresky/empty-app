
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
