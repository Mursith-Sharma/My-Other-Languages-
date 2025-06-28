using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Windowsformprectical
{
    internal class student
    {
        public int id, age;
        public string name, mobile;

        public void save()
        {
            MessageBox.Show("save : [ id : " + id + ", Name : " + name + ", age : " + age + ", Mobile : " + mobile + "]");
        }

        public void update()
        {
            MessageBox.Show("Update : [ id : " + id + ", Name : " + name + ", age :" + age + ", Mobile : " + mobile + "]");
        }
    }



}
