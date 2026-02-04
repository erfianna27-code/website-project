# Directus Setup Instructions

## Prerequisites
- Docker & Docker Compose installed

## Setup Steps

### 1. Navigate to directus-config folder
```bash
cd directus-config
```

### 2. Start Directus containers
```bash
docker-compose up -d
```

### 3. Access Directus Admin
- URL: http://localhost:8055
- On first access, create admin account

### 4. Import schema
- Login to Directus Admin
- Click Settings (⚙️) → Data Model
- Click "Import Schema" button
- Select `directus-schema.json` file
- Click Import

### 5. Upload gallery images
- Go to Content → Collections → (your gallery collection)
- Upload images manually
- Note: Images are not included in this repository

### 6. Update Laravel .env
Add these variables to your main `.env` file (one level up):
```
DIRECTUS_URL=http://localhost:8055
DIRECTUS_TOKEN=your_directus_static_token
```

To get token:
- Login to Directus Admin
- Settings → Access Tokens
- Create new Static Token
- Copy token to Laravel .env

## Notes
- Gallery images are managed via Directus CMS
- Images are stored in Docker volumes (not in this repo)
- For production deployment, update DIRECTUS_URL to your production URL

