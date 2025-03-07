Specified by the RFC 2119, the key words "MUST", "MUST NOT", "REQUIRED", "SHALL",

# MUST system

## Application

- The application MUST be USE the REST API
- The application MUST be USE the JWT token
- The application MUST be USE the Swagger
- The application MUST be USE the Docker
- The application MUST be HAVE the unit tests
- The application MUST be HAVE the integration tests
- The application MUST be HAVE the CI/CD
- The application MUST be HAVE the logging
- The application MUST be HAVE the monitoring

##  User resource

### Registration and security

- user MUST have a unique and valid email
- the resource MUST have field createdAT and updatedAt
- after registration, the user MUST receive a confirmation email.
- BY default, the user MUST be inactive, and have USER_ROLE.
- the user MUST have a password with 8 minimum characters alphanumeric
