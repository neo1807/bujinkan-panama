# DDEV setup
To make 11ty work with DDEV, you need to configure Traefik to route requests to the 11ty site.
## Config
add to `.ddev/config.yaml`
``` YAML
additional_hostnames:
  - 11ty.bujinkan
```
## Traefik
create new file `.ddev/traefik/config/11ty.yaml`
``` YAML
http:
  routers:
    # HTTP (80)
    bujinkan-web-80-http-11ty:
      entrypoints:
        - http-80
      rule: Host(`11ty.bujinkan.ddev.site`)
      service: "bujinkan-web-8080"
      ruleSyntax: v3
      tls: false
      priority: 100

    # HTTPS (443)
    bujinkan-web-80-https-11ty:
      entrypoints:
        - http-443
      rule: Host(`11ty.bujinkan.ddev.site`)
      service: "bujinkan-web-8080"
      ruleSyntax: v3
      tls: true
      priority: 100

  services:
    bujinkan-web-8080:
      loadbalancer:
        servers:
          - url: http://ddev-bujinkan-web:8080
```
