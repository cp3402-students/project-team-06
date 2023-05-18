We use a project management system called Trello to track and manage
tasks related to theme development. Each task is assigned to a team member,
and progress is regularly updated within the system. We also utilise discord
to conduct team meetings where we discuss what we have been working, what we
are doing next and to assist each other in solving issues.

Version Control
---
We use Git for version control to track and manage changes to
our theme's codebase. The repository is hosted on a remote Git
server - https://github.com/cp3402-students/project-team-06.git

The workflow involves the following steps:

- Use the command --- git remote add origin https://github.com/cp3402-students/project-team-06.git
- Create a branch: Before making any changes, create a new branch for the task you are working on. Use a descriptive branch name that reflects the task or feature.
- Make changes: Write your code and make the necessary modifications to the theme files based on the assigned task.
- Commit changes: Once you have completed a significant part of your task, commit your changes to your local branch with a descriptive commit message.
- Push changes: Push your committed changes to the remote repository.
- Pull request: Create a pull request (PR) to merge your branch into the main branch. Assign the PR to a team member for code review if required or do it yourself.
- Merge changes: If the code review is approved, the changes will be merged into the main branch.


Local Development to Staging Deployment
----
- Develop and test your theme updates locally using Flywheel Local.
- Ensure that your local development environment is functioning correctly and that all desired changes are implemented and tested thoroughly.
- Once you are satisfied with your changes, commit and push them to your Git repository.
- In the Flywheel Local interface, select your local site and click on the "Deploy" tab.
- Choose the staging environment as the deployment target.
- Click on the "Deploy" button to initiate the deployment process.
- Flywheel Local will automatically package your theme updates and deploy them to the staging environment.
- Monitor the deployment progress and ensure that there are no errors or issues reported.
- once the deployment is complete, access your staging site to verify that the theme updates are applied correctly and functioning as expected.
- Perform thorough testing on the staging site to ensure that all features and functionalities are working properly.
- If any issues are identified, make necessary adjustments to your code, commit the changes, and redeploy to the staging environment.

Staging to Production Deployment
-----
- After thorough testing on the staging site, it's time to deploy them to the live site.
- In the Flywheel Local interface, select your local site and click push at the bottom right corner
- Click on the "Deploy" button to initiate the deployment process.
- Flywheel Local will automatically package your theme updates and deploy them to the production environment.
- Monitor the deployment progress and ensure that there are no errors or issues reported.
- Once the deployment is complete, access your live site to verify that the theme updates are applied correctly and functioning as expected.
- Perform thorough testing on the live site to ensure that all features and functionalities are working properly.
- If any issues are identified, make necessary adjustments to your code, commit the changes, and redeploy to the production environment