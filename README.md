# Hydra. So many Head(er)s.

This extension allows to add response headers on a per site base without using TypoScript.

If you have only one set of response headers that you want your TYPO3 websites to send, it might be a good idea
to configure the headers directly in your webserver. However, there might be the requirement that different
sites inside the same TYPO3 system have to send different headers. In such a case, this extension provides the
functionality to configure response headers in the site configuration.

## Example

In the site config simply specify the headers:

```yaml
responseHeaders:
  Content-Security-Policy: "frame-ancestors 'self'"
  Referrer-Policy: "no-referrer-when-downgrade"
  X-Content-Type-Options: "nosniff"
  X-Xss-Protection: "1; mode=block"
  Feature-Policy: "camera 'none'; geolocation 'none'; microphone 'none'; payment 'none'"
  Permissions-Policy: "camera=(), geolocation=(), microphone=(), payment=()"
  X-Frame-Options: "SAMEORIGIN"
```

Those headers will be added via a middleware to responses only for the corresponding site.

## Sharing our expertise

[Find more TYPO3 extensions we have developed](https://b13.com/useful-typo3-extensions-from-b13-to-you) that help us deliver value in client projects. As part of the way we work, we focus on testing and best practices to ensure long-term performance, reliability, and results in all our code.
