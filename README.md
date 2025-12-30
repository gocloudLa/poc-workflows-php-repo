# PHP Service Example

This is a minimal PHP service example demonstrating the centralized CI/CD workflow system.

## Structure

- `index.php`: Main service file with simple functions
- `tests/`: Unit tests using PHPUnit
- `Dockerfile`: Container image definition
- `.github/workflows/`: GitHub Actions workflows that consume shared workflows

## Workflows

This repository uses the centralized workflows from `gocloudLa/poc-workflows-shared`:

- **Pull Request Events**: Validates code on PRs to `develop` branch
- **Develop Push Events**: Builds, tags, and deploys to dev environment
- **Main Push Events**: Creates releases, deploys to staging, validates, and deploys to production

## Configuration

### Required Secrets

- `ECR_REPOSITORY_URL`: ECR repository URL
- `AWS_ROLE_ARN_SHARED`: IAM role for ECR access
- `AWS_ROLE_ARN_DEV`: IAM role for dev environment
- `AWS_ROLE_ARN_STAGING`: IAM role for staging environment
- `AWS_ROLE_ARN_PROD`: IAM role for production environment

### Required Variables

- `AWS_REGION`: AWS region (optional, defaults to us-east-1)

### GitHub Environments

Configure the following environments in GitHub:
- `dev`: Automatic deployment (no protection rules)
- `staging`: Automatic deployment (no protection rules)
- `prd`: Requires manual approval (PCI compliance)

## Running Locally

```bash
# Install dependencies
composer install

# Run tests
composer test

# Build Docker image
docker build -t php-service .

# Run container
docker run -p 8080:8080 php-service
```

## CI/CD Flow

1. **Feature Branch → PR to develop**: Runs linters, security scans, unit tests, coverage validation
2. **develop branch (push)**: Security scan → Build & Tag → Deploy to Dev → Verification → Health Check
3. **main branch (push)**: Release → Build & Tag → Deploy to Staging → Validation → **Approval** → Deploy to Production


## Release workflow test
Triggering semantic-release workflow test.

Random change: 1766787149

Random change: 1766787389

Random change: 1766788502

Node release workflow test: 1766790359

Test github apps
