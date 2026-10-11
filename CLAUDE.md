# Project notes for Claude

- The live site runs on WordPress (thebibleliketotally.com) using the custom theme in `wordpress-theme/tblt-theme/`.
- **Always back up the theme source here after every theme release.** Copy the current theme folder into `wordpress-theme/tblt-theme/`, commit with the theme version in the message (for example "Theme v1.0.11"), and merge to `main`. This is a standing instruction from the site owner.
- The theme version lives in the `Version:` line of `wordpress-theme/tblt-theme/style.css` and shows in the site footer.
- Update by uploading the zip at Appearance → Themes → Add New → Upload Theme, then "Replace installed with uploaded".
- Static HTML files in the repo root are an archived design reference only. Do not add a `CNAME` file.
