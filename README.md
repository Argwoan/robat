# Install virtual Box
## download Ubuntu
### Install Ros
Setup your sources.list
'sudo sh -c 'echo "deb http://packages.ros.org/ros/ubuntu $(lsb_release -sc) main" > /etc/apt/sources.list.d/ros-latest.list''
Set up your keys
'sudo apt install curl # if you haven't already installed curl
curl -s https://raw.githubusercontent.com/ros/rosdistro/master/ros.asc | sudo apt-key add -'
 up-to-date  Debian package index
 'sudo apt update'
Desktop-Full Install
'sudo apt install ros-noetic-desktop-full'
find available packages
'apt search ros-noetic'
Environment setup
'echo "source /opt/ros/noetic/setup.bash" >> ~/.bashrc
source ~/.bashrc'
Initialize rosdep
sudo rosdep init
rosdep update
