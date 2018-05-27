
#include<stdio.h>
#include<GL/glut.h>
//#include<process.h>
#include<string.h>
void balloon();
void bow();
void arrow();
void startdisplay();
void keystroke(unsigned char,int,int);
void output(float, float, char *);
void display1();
void pipes();
void arrow_dis();
void arrow1();
void display2();
char score[10]={"score ="};
char key[20]={"keyboard"};
char mou[10]={"mouse"};
char con[100]={"Fire      Leftbtn         'a' key "};
char con1[100]={"Reload  Rightbtn      'd' Key"};
char win1[50]={"OKAY, BUT U CAN DO STILL BETTER"};
char win2[40]={" GOOD PERFORMANCE"};
char win3[40]={" AWESOME !!!"};
char out[60]={"PLAY AGAIN? Y/N"};
char game[20]={"G A M E  O V E R"};
int  a=12,b=0,c=0,d=0,e=0,p=0,i=8,r=0,j=0,x=0,k=0,q=0;
int quo,rem,fno,sno,tno,len;
void update(int value)
{
	if(p==1)
		a+=60;
	c+=20;
	d+=40;
	e+=60;
	glutPostRedisplay();
	glutTimerFunc(150,update,0);
}

void display(void)
{
	glClear(GL_COLOR_BUFFER_BIT|GL_DEPTH_BUFFER_BIT);

	display1();
	if(i==-2)								
		display2();
	

	glFlush();
	glutSwapBuffers();
}
void startdisplay(void)
{
	glClear(GL_COLOR_BUFFER_BIT|GL_DEPTH_BUFFER_BIT);
	glColor3f(0.0,1.0,0.0);
	
	output(400,700,"SJBIT, BANGALORE");
	
	output(400,650,"  ::::MINI PROJECT ON::::");
	
	output(375,600," ::SHOOTING THE BALLOONS::");
	
	output(425,550,"SUBMITTED BY:");
	
	output(50,500, "Vikrant Kumar Gupta");
	
	output(50,450,"1jb15cs183");
	
	output(375,400,"UNDER THE GUIDANCE OF:");

	output(50,350,"Mrs. Pavithra GS");
	
	output(775,350,"Mrs. Charulata");

	output(50,300,"Asst. Prof., Dept. of CSE");
	
	output(775,300,"Asst. Prof., Dept. of CSE");
	
	output(50,250,"SJBIT, BANGALORE");
	
	output(775,250,"SJBIT, BANGALORE");

	output(400,100,"press 'S' to Start the Game");
	
	glutKeyboardFunc(keystroke);
	
	glutPostRedisplay();
	glutSwapBuffers();
	glFlush();
}
void keystroke(unsigned char key,int x,int y)
{
	if(key == 'a')  p=1;
   	if(key == 'A')  p=1;
   	if(key == 'd' && a>=960) 
	{
		p=2;
		i--;
	}
  	if(key == 'D' && a>=960)  
	{
		p=2;
		i--;
	}
	if(key=='y' && i==-2) 
	{
		a=12,b=0,c=0,d=0,e=0,p=0,i=8,r=0,j=0,x=0,k=0,q=0;
		display1();
	} 
	if(key=='n' && i==-2)// exit(0);
	
	if(key==27)// exit(0);
	if((key=='S' || key=='s'))
  {
	
	glutDisplayFunc(display);

	display();
  }
	glutPostRedisplay();
}

void output(float x, float y, char *string)
{
	
	glRasterPos2f(x, y);
	len = (int)strlen(string);
	
  for (k = 0; k < len; k++) 
  {
    glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24, string[k]);
	glutInitDisplayMode(GLUT_DEPTH);
	glEnable(GL_DEPTH_TEST);
  }

}


void display1()
{
	
	glClear(GL_COLOR_BUFFER_BIT);
		bow();

	if(i!=-2)							//condition checking the exhaustion of arrowa
		arrow();
	arrow_dis();
	pipes();

	glPushMatrix();           
	glTranslated(400,c,0.0);
	glScaled(5.0,5.0,0.0);
	glColor3f(1.0,0.0,0.0);     
	balloon();							//function calling the red balloon
	glPopMatrix();
		
	glPushMatrix();           
	glTranslated(600,d,0.0);
	glScaled(5.0,5.0,0.0);
	glColor3f(0.0,1.0,0.0);     
	balloon();									//function calling the green balloon
	glPopMatrix();

	glPushMatrix();           
	glTranslated(800,e,0.0);
	glScaled(5.0,5.0,0.0);
	glColor3f(0.0,0.0,1.0);     
	balloon();										//function calling the blue balloon
	glPopMatrix();

	if(e==780)										//condition to check the display of the blue balloon from the first
		e=0;

	if(d==800)										//condition to check the display of the green balloon from the first
		d=0;

	if(c==780)										//condition to check the display of the red balloon from the first
		c=0;

	if(p==2)										//to bring the arrow to the initial position 	
		a=12;

	if(c>=300&&c<=360&&a>=280&&a<=360)				//condition to check if the red balloon is shot or not
	{
		c=0;
		x+=10;
	}
	if(d>=280&&d<=360&&a>=480&&a<=600)				//condition to check if the red balloon is shot or not
	{
		d=0;
		x+=20;
	}
	if(e>=300&&e<=360&&a>=680&&a<=760)				//condition to check if the red balloon is shot or not	
	{
		e=0;
		x+=30;
	}

	glColor3f(0.75,1.0,0.75);								//to  display the word 'keyboard'on the display window
	glRasterPos2f(180,80);
	for(k=0;k<sizeof(key);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,key[k]);



	glColor3f(1.0,0.25,1.0);								//to display the controller list
	glRasterPos2f(0,50);
	for(k=0;k<sizeof(con);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,con[k]);

	glColor3f(1.0,0.25,1.0);								//to display the controller list			
	glRasterPos2f(0,20);
	for(k=0;k<sizeof(con1);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,con1[k]);



	glColor3f(0.75,1.0,0.75);								//to  display the word 'mouse'on the display window								
	glRasterPos2f(70,80);
	for(k=0;k<sizeof(mou);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,mou[k]);



	glColor3f(1.0,1.0,1.0);											//to  display the score on the display window
	glRasterPos2f(230.0,750.0);
	for(k=0;k<sizeof(score);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,score[k]);

	if( x<100)
	{
		quo=(x/10);
		rem=(x%10);
		glRasterPos2f(300.0,750.0);
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+quo);
		glRasterPos2f(310.0,750.0);
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+rem);
				
	}

	if(x>=100)
	{
		quo=(x/10);
		fno=(quo/10);
		sno=(quo%10);
		tno=(x%10);
		glRasterPos2f(300.0,750.0);
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+fno);
		glRasterPos2f(310.0,750.0);
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+sno);
		glRasterPos2f(320.0,750.0);
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+tno);
	}
}


void pipes()
{
	
	glColor3f(1.0,0.0,0.0);         //construction of red pipe
	glBegin(GL_POLYGON);
	glVertex2f(410,0);
	glVertex2f(410,40);
	glVertex2f(470,40);
	glVertex2f(470,0);
	glEnd();
	
	glColor3f(0.0,1.0,0.0);         //construction of green pipes
	glBegin(GL_POLYGON);
	glVertex2f(610,0);
	glVertex2f(610,40);
	glVertex2f(670,40);
	glVertex2f(670,0);
	glEnd();

	glColor3f(0.0,0.0,1.0);         //construction of blue pipe
	glBegin(GL_POLYGON);
	glVertex2f(810,0);
	glVertex2f(810,40);
	glVertex2f(870,40);
	glVertex2f(870,0);
	glEnd();

}


void bow()
{
	glPushMatrix();           
	glTranslated(10,250,0.0);
	glScaled(15.0,15.0,0.0);
	glColor3f(1.0,1.0,1.0);         //construction of bow
	glBegin(GL_POLYGON);
	glVertex2f(4,2.5);
	glVertex2f(3.7,2.9);
	glVertex2f(3.5,3.3);
	glVertex2f(3.5,3.5);
	glVertex2f(4,3.5);
	glVertex2f(4,3.2);
	glVertex2f(4.2,2.9);
	glVertex2f(4.5,2.5);
	glEnd();
	
	glBegin(GL_POLYGON);
	glVertex2f(3.5,3.5);
	glVertex2f(5.9,7.3);
	glVertex2f(6.4,7.3);
	glVertex2f(4,3.5);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(5.9,7.3);
	glVertex2f(6,7.4);
	glVertex2f(6,7.5);
	glVertex2f(5.5,8);
	glVertex2f(6,8.5);
	glVertex2f(6.5,7.7);
	glVertex2f(6.5,7.4);
	glVertex2f(6.4,7.3);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(5.5,8);
	glVertex2f(5.5,10.5);
	glVertex2f(6,10);
	glVertex2f(6,8.5);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(5.5,10.5);
	glVertex2f(6,11);
	glVertex2f(6,11.1);
	glVertex2f(5.9,11.2);
	glVertex2f(6.4,11.2);
	glVertex2f(6.5,11.1);
	glVertex2f(6.5,10.8);
	glVertex2f(6,10);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(5.9,11.2);
	glVertex2f(3.5,15);
	glVertex2f(4,15);
	glVertex2f(6.4,11.2);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(3.5,15);
	glVertex2f(3.5,15.2);
	glVertex2f(3.7,15.6);
	glVertex2f(4,16);
	glVertex2f(4.5,16);
	glVertex2f(4.2,15.7);
	glVertex2f(4,15.5);
	glVertex2f(4,15);
	glEnd();


	glPopMatrix();
	if(p==1)
	{
		if(b!=2 )
		{
			glPushMatrix();           
			glTranslated(10,250,0.0);
			glScaled(15.0,15.0,0.0);
			glColor3f(1.0,1.0,1.0);         //construction of thread stretched(loaded with arrow)
			glBegin(GL_LINES);
			glVertex2f(3.5,15);
			glVertex2f(1.5,9.25);
			glEnd();
			glBegin(GL_LINES);
			glVertex2f(1.5,9.25);
			glVertex2f(3.5,3.5);
			glEnd();
			glPopMatrix();
			b+=1;
		}
		else
		{
			glPushMatrix();           
			glTranslated(10,250,0.0);
			glScaled(15.0,15.0,0.0);
			glColor3f(1.0,1.0,1.0);         //construction of thread
			glBegin(GL_LINES);
			glVertex2f(3.5,15);
			glVertex2f(3.5,3.5);
			glEnd();
			glPopMatrix();
		}
	}
	if(p==2 || p==0)
	{
		glPushMatrix();           
		glTranslated(10,250,0.0);
		glScaled(15.0,15.0,0.0);
		glColor3f(1.0,1.0,1.0);        
		glBegin(GL_LINES);
		glVertex2f(3.5,15);
		glVertex2f(1.5,9.25);
		glEnd();
		glBegin(GL_LINES);
		glVertex2f(1.5,9.25);
		glVertex2f(3.5,3.5);
		glEnd();
		glPopMatrix();
	}

}



void arrow()
{
	glPushMatrix();  
	glTranslated(a,360,0.0);
	glScaled(15.0,15.0,0.0);
	glColor3f(0.5,0.5,0.5);         //construction of arrow
	glBegin(GL_POLYGON);
	glVertex2f(1,1);
	glVertex2f(2,1.5);
	glVertex2f(2,2);
	glVertex2f(1.5,1.75);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(2,2);
	glVertex2f(1,2.5);
	glVertex2f(1.5,1.75);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(2,1.5);
	glVertex2f(6.5,1.5);
	glVertex2f(6.5,2);
	glVertex2f(2,2);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(6.5,1.5);
	glVertex2f(6.5,1);
	glVertex2f(7.5,1.75);
	glVertex2f(6.5,2.5);
	glVertex2f(6.5,2);
	glEnd();

	glPopMatrix();
}

void arrow_dis()									//display of  arrows in the display windoww
{
	if(i>=0)
	{
		glPushMatrix();  
		glTranslated(5,600,0.0);
		arrow1();
			glPopMatrix();
	}
	if(i>=1)
	{
		glPushMatrix();  
		glTranslated(40,600,0.0);
		arrow1();
		glPopMatrix();
	}
	if(i>=2)
	{
		glPushMatrix();  
		glTranslated(80,600,0.0);
		arrow1();
		glPopMatrix();
	}
	if(i>=3)
	{
		glPushMatrix();  
		glTranslated(120,600,0.0);
		arrow1();
		glPopMatrix();
	}
	if(i>=4)
	{
		glPushMatrix();  
		glTranslated(160,600,0.0);
		arrow1();
		glPopMatrix();
	}
	if(i>=5)
	{
		glPushMatrix();  
		glTranslated(200,600,0.0);
		arrow1();
		glPopMatrix();
	}
	if(i>=6)
	{
		glPushMatrix();  
		glTranslated(240,600,0.0);
		arrow1();
		glPopMatrix();
	}
	if(i>=7)
	{
		glPushMatrix();  
		glTranslated(280,600,0.0);
		arrow1();
		glPopMatrix();
	}
	if(i>=8)
	{
		glPushMatrix();  
		glTranslated(320,600,0.0);
		arrow1();
		glPopMatrix();
	}
}

void arrow1()
{
	glScaled(15.0,15.0,0.0);
	glColor3f(0.5,0.5,0.5);         //construction of vertical arrow
	glBegin(GL_POLYGON);
	glVertex2f(1,1);
	glVertex2f(1.5,2);
	glVertex2f(2,2);
	glVertex2f(1.75,1.5);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(1.5,2);
	glVertex2f(1.5,6.5);
	glVertex2f(2,6.5);
	glVertex2f(2,2);
	glEnd();

	glBegin(GL_POLYGON);
	glVertex2f(1.5,6.5);
	glVertex2f(1,6.5);
	glVertex2f(1.75,7.5);
	glVertex2f(2.5,6.5);
	glVertex2f(2,6.5);
	glEnd();

		glBegin(GL_POLYGON);
	glVertex2f(2,2);
	glVertex2f(2.5,1);
	glVertex2f(1.75,1.5);
	glEnd();


}

void balloon()
{
		glBegin(GL_POLYGON);         //construction of balloon
		glVertex2f(8,18);
		glVertex2f(9,17.9);
		glVertex2f(10,17.7);
		glVertex2f(11,17.2);
		glVertex2f(11.8,16.7);
		glVertex2f(12.6,15.9);
		glVertex2f(13.2,15);
		glVertex2f(13.6,14.1);
		glVertex2f(13.9,13.1);
		glVertex2f(14,12);
		glVertex2f(13.9,11);
		glVertex2f(13.7,10);
		glVertex2f(13.2,9);
		glVertex2f(12.6,8.2);
		glVertex2f(11.8,7.4);
		glVertex2f(11,6.8);
		glVertex2f(10,6.3);
		glVertex2f(9.7,6);
		glVertex2f(9.5,5.5);
		glVertex2f(9.5,4);
		glVertex2f(6.5,4);
		glVertex2f(6.5,5.5);
		glVertex2f(6.3,6);
		glVertex2f(6,6.3);
		glVertex2f(5,6.8);
		glVertex2f(4.2,7.4);
		glVertex2f(3.5,8);
		glVertex2f(2.8,9);
		glVertex2f(2.4,10);
		glVertex2f(2.1,10.9);
		glVertex2f(2,12);
		glVertex2f(2.1,13.1);
		glVertex2f(2.3,14);
		glVertex2f(2.8,15);
		glVertex2f(3.4,15.9);
		glVertex2f(4.2,16.9);
		glVertex2f(5,17.2);
		glVertex2f(6,17.7);
		glVertex2f(7,17.9);
		glEnd();
}


void display2()											//display of the second window
{
	glClear(GL_COLOR_BUFFER_BIT|GL_DEPTH_BUFFER_BIT);

	glColor3f(1.0,0.0,0.0);
	glRasterPos2f(400,600);
	for(k=0;k<sizeof(game);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,game[k]);   //to  display the message 'GAME OVER'on the second display window

	
	if(x<100)													//condition to display the message 'OKAY, BUT U CAN DO STILL BETTER'
	{
		glColor3f(0.0,1.0,0.0);
		glRasterPos2f(400.0,400.0);
		for(k=0;k<sizeof(win1);k++)
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,win1[k]);
	}
	else if(x<150)												//condition to display the message	'GOOD PERFORMANCE'		
	{
		glColor3f(0.0,1.0,0.0);
		glRasterPos2f(400.0,400.0);
		for(k=0;k<sizeof(win2);k++)
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,win2[k]);
	}
	else														//condition to display the message 'AWESOME'
	{
		glColor3f(0.0,1.0,0.0);																				
		glRasterPos2f(400.0,400.0);
		for(k=0;k<sizeof(win3);k++)
		glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,win3[k]);
	}

	glColor3f(1.0,1.0,1.0);												//to display the score on the second display window
	glRasterPos2f(400.0,450.0);
	for(k=0;k<sizeof(score);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,score[k]);


	if( x<100)
	{
			quo=(x/10);
			rem=(x%10);
			glRasterPos2f(470.0,450.0);
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+quo);
			glRasterPos2f(480.0,450.0);
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+rem);
			
	}

	if(x>=100)
	{
			quo=(x/10);
			fno=(quo/10);
			sno=(quo%10);
			tno=(x%10);
			glRasterPos2f(480.0,450.0);
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+fno);
			glRasterPos2f(490.0,450.0);
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+sno);
			glRasterPos2f(500.0,450.0);
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,48+tno);
	}

		
	glColor3f(0.0,0.0,1.0);												//to display the message 'PLAY AGAIN Y/N?'
	glRasterPos2f(400,350);
	for(k=0;k<sizeof(out);k++)
	glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,out[k]);


	glFlush();
}

	
void mouse(int btn,int state,int x,int y)									//Interfacing the Mouse
{
	if(btn==GLUT_LEFT_BUTTON && state==GLUT_DOWN) p=1;
	if(btn==GLUT_RIGHT_BUTTON && state==GLUT_DOWN && a>=960) 
	{
		p=2;
		i--;
	}
}

void myinit()
{

	glClearColor(0.0f,0.0f,0.0f,1.0f);
	glColor3f(1.0,0.0,0.0);
	glPointSize(1.0);
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
	gluOrtho2D(0.0,1024.0,0.0,768.0);

}


void main(int argc, char* argv[])
{
	glutInit(&argc, argv);
	glutInitDisplayMode(GLUT_DOUBLE | GLUT_RGB | GLUT_DEPTH);
	glutInitWindowSize(1024.0,705.0);
	glutCreateWindow("Shoot The Balloons");
	glutFullScreen();
	glutDisplayFunc(startdisplay);
	glutMouseFunc(mouse);
	glutKeyboardFunc(keystroke);
	myinit();
	glEnable(GLUT_DEPTH);	
	glutTimerFunc(100,update,0);
	glutMainLoop();
}
