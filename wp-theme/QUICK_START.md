# Quick Start Guide - Chaithanya Portfolio WordPress Theme

## 🚀 Installation (5 minutes)

1. **Unzip Theme**
   - Extract to `/wp-content/themes/chaithanya-portfolio`

2. **Activate Theme**
   - WordPress Admin → Appearance → Themes
   - Click "Activate" on Chaithanya Portfolio

3. **Add Images**
   - Copy your images to: `/wp-content/themes/chaithanya-portfolio/images/`
   - Required: `github.png`, `linkedin-logo.png`, `email.png`

4. **Configure**
   - Appearance → Customize
   - Update Resume URL, GitHub, LinkedIn, Email

5. **Done!** 🎉

---

## 📝 Add Your Content

### Projects (5 min)

Click: **Projects → Add New**

```
Title: Your Project Name
Content: Brief description of what it does
Featured Image: Screenshot
Custom Field `project_link`: https://github.com/you/project-name
```

**💡 Tip:** Add 3-5 projects to showcase your best work

### Certifications (3 min each)

Click: **Certifications → Add New**

```
Title: Certification Name
Featured Image: Certificate badge/image
Custom Field `organization`: Organization Name
Custom Field `year`: 2024
```

### Experience (5 min each)

Click: **Experience → Add New**

```
Title: Position Title - Company
Custom Field `experience_meta[period]`: 09/2024 – 12/2024 · City
Content:
• Achievement 1
• Achievement 2
• Achievement 3
```

---

## 🔗 Navigation Setup

1. Go to **Appearance → Menus**
2. Create: "Main Menu"
3. Add pages: Home, About, Projects, Experience, Certification
4. Set to "Primary Menu"
5. Save

---

## 🎨 Customization

### Change Colors

Edit `style.css`:
- **Teal**: Change `#2dd4bf` to your color
- **Dark Background**: Change `#020617`
- **Text**: Change `#e5e7eb`

### Modify About Section

Edit page: **About**

The theme includes a default About section. Edit it directly in WordPress to customize.

### Update Social Media

**Appearance → Customize → Social Links**
- Change GitHub URL
- Change LinkedIn URL
- Change Email

---

## 📱 Common Tasks

### Change Site Title
Settings → General → Site Title

### Add New Page
Pages → Add New (then link in menu)

### Edit Homepage Text
Edit the "Home" page or modify `index.php`

### Change Resume Link
Appearance → Customize → Resume URL

### Feature an Image
Add Featured Image to any post/page

---

## ⚙️ Tips & Tricks

✅ **Best Practices**
- Use high-quality images (1200x800px for projects)
- Keep descriptions concise
- Add 5+ projects to showcase variety
- Update experience regularly
- Use descriptive titles

❌ **Avoid**
- Don't delete main template files
- Don't remove header/footer includes
- Never use old HTML files alongside WordPress

---

## 🐛 Troubleshooting

| Issue | Solution |
|-------|----------|
| Links don't work | Settings → Permalinks → Save Changes |
| Images missing | Check image names exactly match |
| Pages look broken | Regenerate permalinks, clear cache |
| Custom fields missing | Use WordPress admin to add fields manually |

---

## 📚 File Reference

```
wp-content/themes/chaithanya-portfolio/
├── style.css ..................... All styles
├── functions.php ................. Site setup
├── header.php .................... Site header
├── footer.php .................... Site footer
├── index.php ..................... Home page
├── page.php ....................... Regular pages
├── single.php .................... Single post view
├── archive.php ................... Post archives
└── template-parts/ ............... Specific templates
    ├── page-about.php
    ├── archive-project.php
    ├── archive-experience.php
    └── archive-certification.php
```

---

## 🚀 Next Steps

1. ✅ Activate theme
2. ✅ Add images
3. ✅ Set up pages (Home, About, Projects, etc.)
4. ✅ Add 5+ projects
5. ✅ Add 3+ certifications
6. ✅ Add 2+ experience entries
7. ✅ Create navigation menu
8. ✅ Test all links
9. ✅ Launch! 🎉

---

**Need Help?**
- Check INSTALLATION_GUIDE.md for detailed steps
- Review README.md for full documentation
- Consult WordPress.org support forums

**Happy Portfolio Building!** 💪
