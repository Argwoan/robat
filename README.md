# Install virtual Box
## download Ubuntu
### Install Ros
Setup your sources.list
```
sudo sh -c 'echo "deb http://packages.ros.org/ros/ubuntu $(lsb_release -sc) main" > /etc/apt/sources.list.d/ros-latest.list'
```
Set up your keys
```
sudo apt install curl # if you haven't already installed curl
curl -s https://raw.githubusercontent.com/ros/rosdistro/master/ros.asc | sudo apt-key add -
```
 up-to-date  Debian package index
 ```
 sudo apt update
```
Desktop-Full Install
```
sudo apt install ros-noetic-desktop-full
```
find available packages
```
apt search ros-noetic
```
Environment setup
```
echo "source /opt/ros/noetic/setup.bash" >> ~/.bashrc
source ~/.bashrc
```
Initialize rosdep
```
sudo rosdep init
rosdep update
```
creat mcatking 
```
sudo apt-get install ros-noetic-catkin
mkdir -p ~/catkin_ws/src
cd ~/catkin_ws/
catkin_make
cd ~/catkin_ws/src
git clone https://github.com/smart-methods/arduino_robot_arm.git 
cd ~/catkin_ws
rosdep install --from-paths src --ignore-src -r -y
sudo apt-get install ros-kinetic-moveit
sudo apt-get install ros-kinetic-joint-state-publisher ros-kinetic-joint-state-publisher-gui
sudo apt-get install ros-kinetic-gazebo-ros-control joint-state-publisher
sudo apt-get install ros-kinetic-ros-controllers ros-kinetic-ros-control
sudo nano ~/.bashrc
at the end of the (bashrc) file add the follwing line
(source /howe/ooo/catkin_ws/setup.bash)
then 
ctrl + o
```
chek your file
```
source ~/.bashrc
```
run rm 
```
roslaunch robot_arm_pkg check_motors.launch
```
