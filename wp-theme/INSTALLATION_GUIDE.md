# WordPress Theme Installation & Setup Guide

## Step 1: Install WordPress

If you don't have WordPress installed yet:

1. Download WordPress from [wordpress.org](https://wordpress.org)
2. Upload to your hosting
3. Run the WordPress installer
4. Log in to the WordPress admin dashboard

## Step 2: Install the Theme

### Method 1: Manual Upload

1. Download the `chaithanya-portfolio` theme folder
2. Connect via FTP or File Manager
3. Navigate to `/wp-content/themes/`
4. Upload the `chaithanya-portfolio` folder
5. Go to **Appearance** → **Themes** in WordPress admin
6. Click "Activate" on "Chaithanya Portfolio"

### Method 2: WordPress Admin Upload

1. Go to **Appearance** → **Themes** → **Add New**
2. Click "Upload Theme"
3. Select the theme ZIP file
4. Click "Install Now"
5. Click "Activate"

## Step 3: Configure Theme

### Add Images to Theme

Copy the following images to `/wp-content/themes/chaithanya-portfolio/images/`:

- `github.png` - GitHub Logo
- `linkedin-logo.png` - LinkedIn Logo
- `email.png` - Email Icon

### Set Theme Options

1. Go to **Appearance** → **Customize**
2. Scroll down to find customizer options
3. Update:
   - **Resume URL** - Link to your resume PDF
   - **GitHub URL** - Your GitHub profile
   - **LinkedIn URL** - Your LinkedIn profile
   - **Email Address** - Your email

## Step 4: Create Pages

Create these pages in **Pages** → **Add New**:

### Page 1: Home
- Title: "Home" or leave blank for homepage
- Set as Front Page under **Settings** → **Reading**

### Page 2: About
- Title: "About"
- Content: (The theme will auto-fill with About template)

### Page 3: Projects
- Title: "Projects"

### Page 4: Experience
- Title: "Experience"

### Page 5: Certification
- Title: "Certification"

## Step 5: Add Custom Post Types Content

### Add Projects

1. Go to **Projects** → **Add New**
2. Fill in:
   - **Title**: Project name
   - **Content**: Project description
   - **Featured Image**: Screenshot/image
   - **Custom Field** `project_link`: GitHub/project URL
3. Publish

Example Project:
```
Title: Credit Card Fraud Detection
Content: Machine learning project focused on detecting fraudulent credit card transactions using classification algorithms.
Custom Field project_link: https://github.com/cspoojary/Credit_card_fraud_detection
```

### Add Certifications

1. Go to **Certifications** → **Add New**
2. Fill in:
   - **Title**: Certification name
   - **Featured Image**: Certificate/badge image (required)
   - **Custom Field** `organization`: Issuing organization
   - **Custom Field** `year`: Year (e.g., 2024)
3. Publish

Example Certification:
```
Title: Cisco Certified Network Associate (CCNA)
Featured Image: ccna-certification.png
Custom Field organization: Karnataka German Technical Training Institute (KGTTI)
Custom Field year: 2024
```

### Add Experience

1. Go to **Experience** → **Add New**
2. Fill in:
   - **Title**: Position/Company
   - **Content**: Job description as bullet points
   - **Custom Field** `experience_meta[period]`: Date range (e.g., "09/2025 – Present · Bangalore, Karnataka")
3. Publish

Example Experience:
```
Title: Echobrain Pvt Ltd – Data Science with AI Intern
Custom Field experience_meta[period]: 09/2025 – Present · Bangalore, Karnataka
Content:
- Optimized data workflows using Python and SQL.
- Implemented basic ML algorithms for classification.
- Applied SQL and ML concepts to project objectives.
```

## Step 6: Set Home Page

1. Go to **Settings** → **Reading**
2. Select "A Static Page"
3. Set **Front Page** to "Home"
4. Save Changes

## Step 7: Add Navigation Menu (Optional)

1. Go to **Appearance** → **Menus**
2. Create New Menu
3. Add pages: Home, About, Projects, Experience, Certification
4. Set as Primary Menu
5. Save

## Step 8: Update Permalinks

1. Go to **Settings** → **Permalinks**
2. Select "Post name" for clean URLs
3. Save Changes

## Final Checklist

- [ ] Theme activated
- [ ] Images added to theme folder
- [ ] Theme customizer updated with your info
- [ ] Home page created and set
- [ ] About, Projects, Experience, Certification pages created
- [ ] At least one project added
- [ ] At least one certification added
- [ ] At least one experience entry added
- [ ] Navigation menu created (optional)
- [ ] Home page displays correctly
- [ ] Social icons link correctly
- [ ] Resume button works

## Troubleshooting

### Pages show "Page Not Found"

- Regenerate permalinks: **Settings** → **Permalinks** → **Save Changes**
- Clear browser cache
- Make sure pages are published (not draft)

### Images don't appear

- Check image paths in theme folder
- Verify image file names match exactly
- Use WordPress Media Library instead for certification images

### Custom fields not showing

- Use WordPress admin to add meta fields when creating posts
- Or install ACF (Advanced Custom Fields) plugin for easier management

### Links show old HTML files

- Update all navigation links in menus
- Check for hardcoded links in theme files

## Need Help?

- Check [WordPress.org Support](https://wordpress.org/support/)
- Review theme README.md
- Check WordPress admin error logs

Enjoy your new portfolio website!
