import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { InlogSchermComponent } from './inlog-scherm.component';

describe('InlogSchermComponent', () => {
  let component: InlogSchermComponent;
  let fixture: ComponentFixture<InlogSchermComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InlogSchermComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(InlogSchermComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
